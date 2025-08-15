<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe 1 - Gerenciamento Pãodango</title>

    <script src="changePage.js" defer></script>

    <link rel="stylesheet" href="styles/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container-fluid content">
        <div class="row"> 
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid p-1 ms-5 me-5">
                    <a class="navbar-brand fs-4" href="#"></a>
                    <img src="assets/logo.png" width="auto" height="40" class="d-inline-block align-top" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto p-1">
                            <li class="nav-item ms-5" >
                                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="#">Estoque</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="#">Produtos</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="#">Usuários</a>
                            </li>
                            <li class="nav-item ms-5">
                                <a class="nav-link" href="#">Clientes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row d-flex main">
            <div class="col-2 d-flex flex-column gap-5 p-4">
                <button class="menuButton">
                    <div class="d-flex justify-content-between menuItem" onclick="changePage(1)">
                        <div class="d-flex align-items-center ">
                            <i class="bi bi-bar-chart-line me-4"></i>
                            <ul class="menuText">
                               <li>Dashboard</li> 
                            </ul>
                        </div>

                        <i class="bi bi-caret-right"></i>
                    </div>                    
                </button>

                <button class="menuButton">
                    <div class="d-flex justify-content-between menuItem" onclick="changePage(2)">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-bookshelf me-4"></i>
                            <ul class="menuText">
                               <li>Estoque</li> 
                            </ul>
                        </div>

                        <i class="bi bi-caret-right"></i>
                    </div>                    
                </button>

                <button class="menuButton">
                    <div class="d-flex justify-content-between menuItem" onclick="changePage(3)">
                        <div class="d-flex align-items-center ">
                            <i class="bi bi-box-seam me-4"></i>
                            <ul class="menuText">
                               <li>Produtos</li> 
                            </ul>
                        </div>

                        <i class="bi bi-caret-right"></i>
                    </div>                    
                </button>

                <button class="menuButton">
                    <div class="d-flex justify-content-between menuItem" onclick="changePage(4)">
                        <div class="d-flex align-items-center ">
                            <i class="bi bi-person-badge me-4"></i>
                            <ul class="menuText">
                               <li>Usuários</li> 
                            </ul>
                        </div>

                        <i class="bi bi-caret-right"></i>
                    </div>                    
                </button>

                <button class="menuButton">
                    <div class="d-flex justify-content-between menuItem" onclick="changePage(5)">
                        <div class="d-flex align-items-center ">
                            <i class="bi bi-person me-4"></i>
                            <ul class="menuText">
                               <li>Clientes</li> 
                            </ul>
                        </div>

                        <i class="bi bi-caret-right"></i>
                    </div>                    
                </button>

            </div>
            
            <div class="col-10 bg-light">
            <div id="Dashboard"></div>
            <div id="Estoque">
                <?php include 'read_produtos.php'; ?>
            </div>
            <div id="Produtos">
                <?php include 'create_produtos.php'; ?>
            </div>
            <div id="Usuarios"></div>
            <div id="Clientes"></div>
            </div>   

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>