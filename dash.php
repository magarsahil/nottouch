<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Form</title>
    <style>
        .product-input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <form action="#" method="post">
    <div class="product-input">
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" name="phoneNumber" placeholder="Enter phone number" required>
        </div>

        <div id="productInfo">
            <!-- Initial product information input fields -->
            <div class="product-input">
                <label for="product">Product:</label>
                <input type="text" name="product[]" placeholder="Enter product name" required>
            </div>
            <div class="product-input">
                <label for="quantities">Quantities:</label>
                <input type="number" name="quantities[]" placeholder="Enter quantities" required>
            </div>
            <div class="product-input">
                <label for="pricePerKg">Price per kg:</label>
                <input type="number" name="pricePerKg[]" placeholder="Enter price per kg" required>
            </div>
        </div>

        
        <button type="button" onclick="addProductInfo()">Add Another Product</button>
        <br>
        <label for="userImage">Choose an Image:</label>
        <input type="file" id="userImage" name="userImage" accept="image/*">
        <br>
        <input type="submit" value="Submit">
    </form>

    <script>
        let productInfoCount = 1;

        function addProductInfo() {
            productInfoCount++;
            const productInfoContainer = document.getElementById('productInfo');

            const productInput = document.createElement('div');
            productInput.className = 'product-input';

            const productLabel = document.createElement('label');
            productLabel.setAttribute('for', 'product' + productInfoCount);
            productLabel.textContent = 'Product ' + productInfoCount + ':';

            const productInputField = document.createElement('input');
            productInputField.setAttribute('type', 'text');
            productInputField.setAttribute('name', 'product[]');
            productInputField.setAttribute('placeholder', 'Enter product name');
            productInputField.setAttribute('required', 'true');

            const quantitiesLabel = document.createElement('label');
            quantitiesLabel.setAttribute('for', 'quantities' + productInfoCount);
            quantitiesLabel.textContent = 'Quantities ' + productInfoCount + ':';

            const quantitiesInputField = document.createElement('input');
            quantitiesInputField.setAttribute('type', 'number');
            quantitiesInputField.setAttribute('name', 'quantities[]');
            quantitiesInputField.setAttribute('placeholder', 'Enter quantities');
            quantitiesInputField.setAttribute('required', 'true');

            const pricePerKgLabel = document.createElement('label');
            pricePerKgLabel.setAttribute('for', 'pricePerKg' + productInfoCount);
            pricePerKgLabel.textContent = 'Price per kg ' + productInfoCount + ':';

            const pricePerKgInputField = document.createElement('input');
            pricePerKgInputField.setAttribute('type', 'number');
            pricePerKgInputField.setAttribute('name', 'pricePerKg[]');
            pricePerKgInputField.setAttribute('placeholder', 'Enter price per kg');
            pricePerKgInputField.setAttribute('required', 'true');

            productInput.appendChild(productLabel);
            productInput.appendChild(productInputField);

            // Add line break
            productInput.appendChild(document.createElement('br'));
            productInput.appendChild(document.createElement('br'));
            

            productInput.appendChild(quantitiesLabel);
            productInput.appendChild(quantitiesInputField);

            // Add line break
            productInput.appendChild(document.createElement('br'));
            productInput.appendChild(document.createElement('br'));

            productInput.appendChild(pricePerKgLabel);
            productInput.appendChild(pricePerKgInputField);

            // Add line break
            productInput.appendChild(document.createElement('br'));
            productInput.appendChild(document.createElement('br'));

            productInfoContainer.appendChild(productInput);
        }
    </script>

</body>
</html>
