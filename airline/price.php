<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>

<div class="container-fluid m-0 p1 min-vh-100 row justify-content-center py-5">
    <div class="col-12 container rounded-3 col-sm-10 p2 text-white">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid p-0">
                <h4>Purple Fly.com</h4>
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
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                href="logout.php"
                                >Login/Signup</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row justify-content-center my-1">
            <div
                class="col-12 col-lg-7  bg-success bg-opacity-50  rounded-2 py-2"
            >
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h3 class="my-4">Pay Total Amount</h3>

                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <script>
                            var options = {
                                key: "rzp_test_puZ9HHJkDX8sGz", // Enter the Key ID generated from the Dashboard
                                amount: "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                currency: "INR",
                                name: "Acme Corp",
                                description: "Test Transaction",
                                image: "https://example.com/your_logo",
                                // order_id: "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                handler: function (response) {
                                    alert(response.razorpay_payment_id);
                                    alert(response.razorpay_order_id);
                                    alert(response.razorpay_signature);
                                },
                                prefill: {
                                    name: "PurpleFly",
                                    email: "PurpleFly@example.com",
                                    contact: "9000090000",
                                },
                                notes: {
                                    address: "Purple Fly Office",
                                },
                                theme: {
                                    color: "#3399cc",
                                },
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.on("payment.failed", function (response) {
                                alert(response.error.code);
                                alert(response.error.description);
                                alert(response.error.source);
                                alert(response.error.step);
                                alert(response.error.reason);
                                alert(response.error.metadata.order_id);
                                alert(response.error.metadata.payment_id);
                            });
                            document.getElementById("rzp-button1").onclick =
                                function (e) {
                                    rzp1.open();
                                    e.preventDefault();
                                };
                        </script>
                    </div>

                    <h5 class="my-3"><Strong>Payment Details</Strong></h5>
                    <div class="row">
                        <div class="col-7">
                        
                            <p class="mb-1 text-grey">Booked On</p>
                            <p class="mb-1 text-grey">Base Fare</p>
                            <p class="mb-1 text-grey">Taxes and Fee</p>
                            <p class="mb-1"><strong>Total</strong></p>
                        </div>
                        <div class="col-5">
                           
                            <p class="mb-1 text-grey">PurpleFly.com</p>
                            <p class="mb-1 text-grey">&#8377;4000</p>
                            <p class="mb-1 text-grey">&#8377;500</p>
                            <p class="mb-1"><strong> &#8377;4500</strong></p>
                        </div>
                    </div>
                </div>
                <div class=" text-end">
                    <button
                        id="rzp-button1"
                        class="  btn btn-success mt-4"
                    >
                        Pay
                    </button>

                    <a
                        href="Ticketbooked.php"
                        id="rzp-button1"
                        class="btn  btn-success mt-4"
                    >
                        Continue
                    </a>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>
    </div>
</div>
