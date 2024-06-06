<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    <title>WEB KU</title>
    <link rel="icon"
        href="https://th.bing.com/th/id/OIP.J38Ek3sW0qxq_FusRKpr9wHaEK?w=331&h=186&c=7&r=0&o=5&pid=1.7">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class = "container-fluid d-flex flex-column min-vh-100 p-0 ">
        <div class = "row no-gutters">
            <header class = "col-12 bg-primary text-white py-3 ">
                <h1 style="text-align: center;"> {{ $key }} </h1>
                <div class="btn-group float-right">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()-> name ?? ""}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item"><i class="bi bi-person"></i>Profile</a>
                        <a class="dropdown-item" href="/changePassword"><i class="bi bi-gear"></i> Change Password</a>
                        <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                    </div>
                </div>
            </header>
        </div>

        <div class = "row flex-grow-1 no-gutters">
            <div class = "col-2 mt-4 px-4">
                <div class = "nav flex-column nav-pills" id = "v-pills-tab" role = "tablist" aria -
                    orientation = "vertical">
                    <a class = "nav-link {{ $key == 'Home' ? 'active' : '' }}" id = "v-pills-home-tab" href = "/Home">
                        Home </a>
                    <a class = "nav-link {{ $key == 'Master Data' ? 'active' : '' }}" id = "v-pills-MasterData-tab"
                        href = "/MasterData">
                        Master Data </a>
                    <a class = "nav-link {{ $key == 'About' ? 'active' : '' }}" id = "v-pills-About-tab"
                        href = "/About">
                        About </a>
                    <a class = "nav-link {{ $key == 'FAQ' ? 'active' : '' }}" id = "v-pills-FAQ-tab" href = "/FAQ">
                        FAQ </a>
                </div>
            </div>

            <main role = "main" class = "col-md-10 ml-sm-auto col-lg-10 px-4">
                <div
                    class = "d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class = "h2">
                        @yield('title')
                    </h1>
                </div>

                <div class = "card">
                    <div class = "card-body">
                        <p class = "card-text">
                            @yield('content')
                        </p>
                        <footer class = "blockquote-footer">
                            @yield('Quote')
                            <cite title = "Source Title">
                                @yield('Author')
                            </cite>
                        </footer>
                    </div>
                </div>
            </main>
        </div>
        <footer class = "footer col-12 mt-4 py-3 bg-primary text-white text-center w-100">
            <span>
                Template by Michael Albert Yulianto
            </span>
        </footer>
    </div>
    <script script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
