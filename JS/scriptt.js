
function readPost(postId) {
    
        fetch(`fullPost.php?id=${postId}`)
            .then(() => {
                header("Location: fullPost.php");
            })
            .catch((error) => {
             
            })
    
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
                
                
                listItem.innerHTML = `${post.title}<br>${post.textPost}<br>${post.datePost}<button onclick='readPost(${post.id})'>Читать далее</button><br><br>`

                post_list.appendChild(listItem);
            });
        })

}
loadPosts();