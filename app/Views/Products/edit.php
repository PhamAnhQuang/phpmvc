<h1>Edit product</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (isset($product["name"])) echo $product["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter a price" name="price" value ="<?php if (isset($product["price"])) echo $product["price"];?>">
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" class="form-control" id="quantity" placeholder="Enter a quantity" name="quantity" value ="<?php if (isset($product["quantity"])) echo $product["quantity"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>