<?php require 'header.php'; ?>

<!-- main div -->
<div
    class="container-fluid m-0 p1 min-vh-100 row justify-content-center align-items-center"
>
    <div class="col-12 container rounded-3 col-sm-10 p2 px-5 mx-5 text-white ">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light mb-5 ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">logo</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="login.php">Login</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <button class="btn btn-danger" type="submit">
                            Search
                        </button>
                    </form> -->
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-6 my-4
              ">
                <div class="text-white mb-3">
                    <h1 >WHERE WOULD YOU </h1>
                    <h1 >LIKE TO GO ?</h1>
                </div>
                
                <!-- btn -->
                <!-- <button class="btn btn-danger col-4 my-3">One Way</button>
                <button class="btn btn-danger col-4 my-3">Two way</button> -->
                <div class="row container my-4">
                    <div class="form-check col-6">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioDefault1"
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                            One way
                        </label>
                    </div>

                    <div class="form-check col-6">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioDefault2"
                            checked
                        />
                        <label class="form-check-label" for="flexRadioDefault2">
                            Two way
                        </label>
                    </div>
                </div>
                <form action="" class="">
                    <div class="my-2">
                        <input
                            class="form-control my-2"
                            type="text"
                            name=""
                            id="from"
                            placeholder="From"
                        />
                    </div>
                    <div class="mt-3">
                        <input
                            class="form-control my-2"
                            type="text"
                            name=""
                            id="from"
                            placeholder="To"
                        />
                    </div>
                    <!-- <div class="mt-3 ">
                        <input
                            class="form-control my-2"
                            type="text"
                            name=""
                            id="from"
                            placeholder="To"
                        />
                    </div> -->
                    <div class="row">
                        <div class="col-6 my-2">
                            <input
                                class="form-control my-2"
                                type="date"
                                name=""
                                id="from"
                                placeholder="Date"
                            />
                        </div>
                        <div class="col-6 my-2">
                            <input
                                class="form-control my-2"
                                type="number"
                                name=""
                                id="from"
                                placeholder="Passenger count"
                            />
                        </div>
                    </div>
                    <button class="btn btn-danger my-1">Search</button>
                </form>
            </div>

            <div class="col-12 col-lg-6 mb-2">
                <img
                    src="images/blue.gif"
                    class="img-fluid rounded-5"
                    alt=""
                />
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
