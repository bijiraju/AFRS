
<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>

        <button id="rzp-button1">Pay</button>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            var options = {
                key: "rzp_test_puZ9HHJkDX8sGz", // Enter the Key ID generated from the Dashboard
                amount: "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                currency: "INR",
                name: "Purple Fly",
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
                    email: "arfs.gmail.com",
                    contact: "8943120775",
                },
                notes: {
                    address: "PurpleFly.com",
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
            document.getElementById("rzp-button1").onclick = function (e) {
                rzp1.open();
                e.preventDefault();
            };
        </script>
<?php require 'footer.php'; ?>	