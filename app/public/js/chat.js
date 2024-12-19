document.querySelectorAll('.chat-button').forEach(button => {
   console.log(button);
   let btn = button.querySelector('.btn');
   btn.addEventListener('click', () => {
      const keyword = btn.dataset.keyword;
      console.log("送信するキーワード: ", keyword);

      const xhr = new XMLHttpRequest();
      let token = document.getElementsByName('csrf-token').item(0).content;

      xhr.open('POST', '/newmessage');
      xhr.setRequestHeader('X-CSRF-Token', token);
      xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
      xhr.send("keyword=" + encodeURIComponent(keyword));
   });
});

window.Echo.channel('chat-app')
      .listen('MessageSent', function (data) {
      console.log('received a message');
      const messageArea = document.querySelector('#message_area');
      console.log(data);
         let newMessage = data.message.reply;
         let button = data.message.keyword;
      if (data.message.link) {
         newMessage += ` <a href="${data.message.link}" target="_blank">リンクはこちら</a>`;
      }
      messageArea.insertAdjacentHTML('beforeend', `<div class="user-bubble">${button}</div>`);
      messageArea.insertAdjacentHTML('beforeend', `<div class="bot-bubble">${newMessage}</div>`);
      });

