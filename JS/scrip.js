
function fullPost(postId) {
    
        fetch(`fullPost.php?id=${postId}`)
            .then(() => {
                window.location.href="fullPost.php"
            })
            .catch((error) => {
             window.location.href="fullPost.php"
            })
    
}

function deletePost(postId) {
     if (confirm("Вы точно хотите удалить задачу?")) {
        fetch(`deletePost.php?id=${postId}`)
            .then(() => {
                window.location.reload();
            })
            .catch((error) => {
             alert("Удаление невозможно")
            })
        }
}








function loadPosts() {

    fetch('getPost.php').
        then((response) => {

            return response.json();
        })
        .then((data) => {
            const post_list = document.getElementById("post_list");

            post_list.innerHTML = '';
            data.forEach((post) => {

                const listItem = document.createElement('li');
                
                
                listItem.innerHTML = `${post.title}<br>${post.textPost}<br>${post.datePost}<button onclick='fullPost(${post.id})'>Читать далее</button><br>
                <button onclick='deletePost(${post.id})'>Удалить</button><br><br>`

                post_list.appendChild(listItem);
            });
        })

}
loadPosts();