

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
                listItem.classList.add("itemPost")
                
                listItem.innerHTML = `<p class="list_title">${post.title}</p> <div class ="list_content"><p class="list_text">${post.textPost}</p> <br> <p class="list_date">${post.datePost}</p>
                <div class="block_a"><a class="list_a" href="fullPost.php?id=${post.id}">Читать далее</а> </div>
                <button class="list_btn" onclick='deletePost(${post.id})'>Удалить</button></div><br><br>`

                post_list.appendChild(listItem);
            });
        })

}
loadPosts();