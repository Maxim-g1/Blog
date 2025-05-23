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
                const btn = document.createElement('button');
                listItem.innerHTML = `${post.title}<br>${post.textPost}<br>${post.datePost}<button>Читать далее</button><br><br>`

                post_list.appendChild(listItem);
            });
        })

}
loadPosts();