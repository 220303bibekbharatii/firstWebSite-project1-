document.addEventListener('DOMContentLoaded', function () {
    const orderTableBody = document.getElementById('orderTableBody');

    // Fetch orders from the server
    fetch('index.php')
        .then(response => response.json())
        .then(orders => {
            orders.forEach(order => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${order.order_id}</td>
                    <td>${order.product_name}</td>
                    <td>${order.quantity}</td>
                    <td>$${order.price}</td>
                `;
                orderTableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error:', error));
});
