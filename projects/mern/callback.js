const posts = [
    { id: 1, post: "post 1 " },
    { id: 2, post: "post 1 " },
    { id: 3, post: "post 1 " }
]

function postlariListele() {
    setTimeout(() => {
        document.querySelector("ul").appendChild("<li id="">")
    }, 1000);
}