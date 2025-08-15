const pageDash = document.getElementById("Dashboard")
const pageEstoque = document.getElementById("Estoque")
const pageProdutos = document.getElementById("Produtos")
const pageUsuarios = document.getElementById("Usuarios")
const pageClientes = document.getElementById("Clientes")
let lastPage = 0

document.getElementById("Estoque").style.display = "none";

function changePage(page) {
    let debounce = false
    for (let i = 1; i < 3; i++) {
        if (lastPage == 0) {
            if (page == 1) {
                pageDash.style.display = "block"
            } else if (page == 2) {
                pageEstoque.style.display = "block"
            } else if (page == 3) {
                pageProdutos.style.display = "block"
            } else if (page == 4) {
                pageUsuarios.style.display = "block"
            } else if (page == 5) {
                pageClientes.style.display = "block"
            }
            debounce = true
        } else if (debounce == false) {
            if (lastPage == 1) {
                pageDash.style.display = "none"
            } else if (lastPage == 2) {
                pageEstoque.style.display = "none"
            } else if (lastPage == 3) {
                pageProdutos.style.display = "none"
            } else if (lastPage == 4) {
                pageUsuarios.style.display = "none"
            } else if (lastPage == 5) {
                pageClientes.style.display = "none"
            }
            lastPage = 0
        }
    }
    debounce = false
    lastPage = page
}