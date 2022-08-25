$("#submit").click(async function () {
    const host = "https://microzaimtest/api/search"
    const value = $("#search_input").val().trim();

    if (!value || value.length < 3) {
        alert("Упс, а тут пусто! Нужно ввести как минимум 3 символа для начала поиска!");
        return false;
    }

    axios.get(host, {
        params: {
            string: value
        }
    }).then(function (res) {
        res.data.map(function (item) {
            $("#results").append(`
                <div class="search_res_container">
                    <h2><u>Заголовок поста:</u> ${item.post_title}</h2>
                    <p><u>Текст коммента:</u> ${item.comment_text}</p>
                </div>
            `);
        })
    }).catch(function (error) {
        alert(error)
    })


})
