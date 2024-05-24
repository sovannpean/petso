$(document).ready(function () {
    $('.add-to-wishlist').on('click', function (e) {
        e.preventDefault();

        var productId = $(this).data('product_id');

        $.ajax({
            url: '{{ route('/pages/favoritePage/add/') }}',
            method: 'POST',
            data: {
                product_id: productId,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.status === 'success') {
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr) {
                alert('An error occurred. Please try again.');
            }
        });
    });
});

document.getElementById('select-all').addEventListener('change', function (e) {
    let checkboxes = document.querySelectorAll('.select-item');
    checkboxes.forEach(checkbox => {
        checkbox.checked = e.target.checked;
    });
});

document.getElementById('order-selected').addEventListener('click', function () {
    let form = document.getElementById('order-form');
    form.method = 'POST'; // Ensure the method is POST
    form.submit();
});
