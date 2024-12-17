document.querySelectorAll('.chat-button').forEach(button => {
   button.addEventListener('click', () => {
      const keyword = button.dataset.keyword;
      console.log("送信するキーワード: ", keyword);

      const xhr = new XMLHttpRequest();
      let token = document.getElementsByName('csrf-token').item(0).content;

      xhr.open('POST', '/get-bot-reply');
      xhr.setRequestHeader('X-CSRF-Token', token);
      xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
      xhr.send("keyword=" + encodeURIComponent(keyword));

      xhr.onreadystatechange = function () {
         if (xhr.readyState === 4 && xhr.status === 200) {
            const json = JSON.parse(xhr.responseText);
            const messageArea = document.querySelector('#message_area');
            messageArea.insertAdjacentHTML('beforeend', `<div class="user-bubble">${keyword}</div>`);
            let replyMessage = json.reply;

            if (json.link) {
               replyMessage += ` <a href="${json.link}" target="_blank">リンクはこちら</a>`;
            }

            messageArea.insertAdjacentHTML('beforeend', `<div class="bot-bubble">${replyMessage}</div>`);
         }
      };
   });
});
window.Echo.channel('chat-app')
.listen('MessageSent', function (data) {
   console.log('received a message');
   const messageArea = document.querySelector('#message_area');
   let newMessage = data.message;
   if (data.link) {
      newMessage += ` <a href="${data.link}" target="_blank">リンクはこちら</a>`;
   }
   messageArea.insertAdjacentHTML('beforeend', `<div>${newMessage}</div>`);
});