<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>
<div class="container-fluid justify-content-center m-0 p-0">
    <div class="row m-0 p1 py-5">
        <div class="col-12 text-center text-white py-4">
            <div class="row">
                <div class="col-4">
                    <a href="search_index.php" class="border-0 btn">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="30"
                            height="26"
                            fill="currentcolor"
                            class="bi bi-arrow-left-circle-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"
                            />
                        </svg>
                    </a>
                </div>
                <div class="col-4">
                    <h1><strong>KIV - SFO</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-12 col-lg-9 bg-light mt-2 rounded-4 border">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 border rounded-3">
                <div class="row mb-4">
                    <div class="col-7 m-0">
                        <p><strong> Flight Name</strong></p>
                    </div>
                    <div class="col-5">
                        <p><strong> Seat Type</strong></p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-5 col-sm-5">
                        <!--  place From   -->
                        <h5>From</h5>
                        <p class="mb-0 text-grey">Airport name</p>
                        <p class="text-grey">Airport Terminal-1</p>
                    </div>

                    <div class="col-2 col-sm-2">
                        <i class="fa-solid fa-plane"></i>
                    </div>

                    <div class="col-5 col-sm-5">
                        <!--  place From   -->
                        <h5>To</h5>
                        <p class="mb-0 text-grey">Airport name</p>
                        <p class="text-grey">Airport Terminal-1</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <p class="text-grey mb-0"><strong>Depart</strong></p>
                        <p class="mb-0"><strong>Date</strong></p>
                        <p class="mb-0"><strong>Time </strong></p>
                    </div>

                    <div class="col-5">
                        <p class="text-grey mb-0"><strong>Arrival</strong></p>
                        <p class="mb-0"><strong>Date</strong></p>
                        <p class="mb-0"><strong>Time </strong></p>
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="col-12 col-lg-5 border rounded-3 py-2">
                <p class="text-grey"><strong> Trip ID:</strong></p>

                <p><strong>Traveller Info</strong></p>
                <div class="row">
                    <div class="col-7">
                        <p class="text-grey"><strong>Name</strong></p>
                        <p class="mb-0">Name 1</p>
                        <p class="mb-0">Name 2</p>
                    </div>
                    <div class="col-5">
                        <p class="text-grey"><strong>Type</strong></p>
                        <p class="mb-0">type 1</p>
                        <p class="mb-0">type 2</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Journey Details end -->

        <div class="row my-1">
            <div
                class="col-12 col-lg-7 border border-grey border-2 py-2 rounded-3"
            >
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h4 class="mt-4">Pay Total Amount</h4>
                    </div>
                    <div class="col-12 col-lg-5">
                        <button
                            id="rzp-button1"
                            class="btn btn-success col-4 mt-4"
                        >
                            Pay
                        </button>

                        <a
                            href="Ticketbooked.php"
                            id="rzp-button1"
                            class="btn btn-success col-4 mt-4"
                        >
                            Continue
                        </a>
                    </div>
                </div>

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
                            name: "Gaurav Kumar",
                            email: "gaurav.kumar@example.com",
                            contact: "9000090000",
                        },
                        notes: {
                            address: "Razorpay Corporate Office",
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
                    document.getElementById("rzp-button1").onclick = function (
                        e
                    ) {
                        rzp1.open();
                        e.preventDefault();
                    };
                </script>
            </div>

            <div
                class="col-12 col-lg-5 border border-grey border-2 py-2 rounded-3"
            >
                <p class="mb-0"><Strong>Payment Details</Strong></p>
                <div class="row">
                    <div class="col-7">
                        <p class="mb-0 text-grey">Fare Type</p>
                        <p class="mb-0 text-grey">Booked On</p>
                        <p class="mb-0 text-grey">Base Fare</p>
                        <p class="mb-0 text-grey">Taxes and Fee</p>
                        <p class="mb-0"><strong>Total</strong></p>
                    </div>
                    <div class="col-5">
                        <p class="mb-0 text-grey">Non-Refundable</p>
                        <p class="mb-0 text-grey">makemytrip.com</p>
                        <p class="mb-0 text-grey">&#8377;4000</p>
                        <p class="mb-0 text-grey">&#8377;500</p>
                        <p class="mb-0"><strong> &#8377;4500</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
