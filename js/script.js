let comments = [];

document.getElementById('comment-add').onclick = function(){
  event.preventDefault();
  let commentName = document.getElementById('comment-name');
  let commentName = document.getElementById('comment-body');

  let comment = {
    name : commentName.value,
    body : commentBody.value,
    time : Math.floor(Date.now()/1000);
  }
  commentName.value = '';
  commentBody.value = '';
  comments.push(comment);
  saveComments();
  showComments();
}

function saveComments() {
  localStorage.setItem('comments', JSON.stringify(comments));
}

function showComments() {
  let commentField = document.getElementById('comment-field');
  let out = '';
  comments.forEach(function(item) {
    out +=`<p class="text-right small"><em>${timeConverter(item.time)}</em></p>`;
    out +=`<p class="alert alert-primary">${item.name}</p>`;
    out +=`<p class="alert alert-success">${item.body}</p>`;
  });
}
