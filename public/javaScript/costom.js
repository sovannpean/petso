import axios from 'axios';

// Add to Wishlist
function addToWishlist(productId) {

    
    $.ajax({
        url: '/api/wishlist',
        type: 'POST',
        data: {
            product_id: productId,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is included
        },
        success: function (response) {
            console.log('Added to wishlist', response);
            // Update the UI accordingly
        },
        error: function (xhr, status, error) {
            console.error('Error adding to wishlist:', error);
        }
    });
}

// Remove from Wishlist
function removeFromWishlist(productId) {
    axios.delete(`/api/wishlist/${productId}`)
        .then(response => {
            console.log('Removed from wishlist', response.data);
            // Update the UI accordingly
        })
        .catch(error => {
            console.error('Error removing from wishlist:', error);
        });
}

// Fetch Wishlist
function fetchWishlist() {
    axios.get('/api/wishlist')
        .then(response => {
            console.log('Wishlist:', response.data);
            // Render wishlist items in the UI
        })
        .catch(error => {
            console.error('Error fetching wishlist:', error);
        });
}
