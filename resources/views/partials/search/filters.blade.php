<aside class="d-flex flex-column justify-content-center bg-light rounded p-2">
        <h4 class="text-start">Filters</h4>
        <div>
            <label class="mt-2" for="categories">Categories</label>
            <div id="categories" class="rounded border border-secondary p-2" style="max-height:10em; overflow-y: scroll">
                <?php for ($i = 0; $i < count($categories); $i++) {
                        $category = $categories[$i]['name'];
                    ?>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input categoryCheckbox" name="category[]" id="category<?= $i ?>" value="<?= $category ?>">
                        <label class="custom-control-label" for="category<?= $i ?>"><?= $category ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div>
            <label class="mt-3" for="brands">Brands</label>
            <div id="brands" class="rounded border border-secondary p-2" style="max-height:10em; overflow-y: scroll">
                <?php for ($i = 0; $i < count($brands); $i++) {
                        $brand = $brands[$i];
                    ?>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input brandCheckbox" name="brand[]" id="brand<?= $i ?>"  value="<?= $brand ?>">
                        <label class="custom-control-label" for="brand<?= $i ?>"><?= $brand ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="custom-control custom-switch my-3">
            <input type="checkbox" class="custom-control-input" name="inStock" id="stockSwitch">
            <label class="custom-control-label" for="stockSwitch">In Stock</label>
        </div>
        <div>
            <label id="minPriceLabel" for="minPrice">Minimum Price</label>
            <input type="range" class="custom-range" min="0" max="500" step="2" name="minPrice" id="minPrice">
        </div>
        <div>
            <label id="maxPriceLabel" for="maxPrice">Maximum Price</label>
            <input type="range" class="custom-range" min="0" max="500" step="2" name="maxPrice" id="maxPrice">
        </div>
        <center>
            <h3 id="priceLimitDisplay">None</h3>
        </center>
        <button class="btn btn-primary button my-2" type="submit">Apply</button>
    </aside>
