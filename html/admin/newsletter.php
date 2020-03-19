<?php
include_once("../templates/tpl_admin.php");

draw_header();
draw_navbar();
?>

<div class="container-fluid">
  <div class="row">

    <?php draw_sidebar("newsletter") ?>

    <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="container">

        <div class="mb-4 d-flex justify-content-between align-items-center flex-wrap border-bottom mt-2">
          <h1>Newsletter</h1>
          <button type="button" class="btn button" data-toggle="modal" data-target="#addQuestionModal">
            Send Newsletter
          </button>
        </div>

        <div class="mx-auto mt-2">
          <form>
            <div class="form-group">
              <label for="subjectInput">Subject</label>
              <input type="Text" class="form-control" id="subjectInput" placeholder="Write e-mail subject...">
            </div>
            <div class="form-group">
              <label for="titleInput">Title</label>
              <input type="Text" class="form-control" id="titleInput" placeholder="Write e-mail topic...">
            </div>
            <div class="form-group">
              <label for="titleInput">Body</label>
              <textarea class="form-control" id="titleInput" rows="5" placeholder="Write e-mail body"></textarea>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="mt-2">
                  <h3>Add Items</h3>
                </div>
                <div class="input-group my-3 mr-sm-2">
                  <input class="form-control" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseFilterLeft" aria-expanded="false" aria-controls="collapseFilter">
                      Filter
                    </button>
                  </div>
                </div>

                <div class="collapse" id="collapseFilterLeft">
                  <div class="row align-items-center justify-content-around">
                    <div class="col-md-6 col-sm-12">
                      <label for="categories">Categories</label>
                      <div id="categories" class="rounded border p-2 search-box-category">
                        <?php for ($i = 1; $i < 6; $i++) { ?>

                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="category<?= $i ?>">
                            <label class="custom-control-label" for="category<?= $i ?>">Category <?= $i ?></label>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <label for="brands">Brands</label>
                      <div id="brands" class="rounded border p-2 search-box-category">
                        <?php for ($i = 1; $i < 6; $i++) { ?>

                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand<?= $i ?>">
                            <label class="custom-control-label" for="brand<?= $i ?>">Brand <?= $i ?></label>
                          </div>
                        <?php } ?>
                      </div>
                    </div>

                    <div class="col-3 text-center">
                      <div class="custom-control custom-switch my-3">
                        <input type="checkbox" class="custom-control-input" id="stockSwitch">
                        <label class="custom-control-label" for="stockSwitch">In-Stock</label>
                      </div>
                    </div>

                    <div class="col-9">
                      <div class="range-slider my-3">
                        <label for="price">Price:
                          <span class="rangeValues"></span>
                        </label>
                        <input type="range" class="custom-range price-slider" name="minprice" value="0" min="0" max="200" step="1">
                        <input type="range" class="custom-range price-slider" name="maxprice" value="200" min="0" max="200" step="1">
                      </div>
                    </div>

                  </div>

                </div>

                <table class="table table-striped table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $product = array(
                      "id" => 1,
                      "name" => "Dynamic Black Ink 100ml",
                      "price" => 17.99,
                      "img" => "https://media.killerinktattoo.pt/media/catalog/product/cache/12/image/2495a9b687712b856acb717d0b834074/d/y/dynamic-tattoo-ink-black.jpg"
                    );

                    for ($i = 0; $i < 7; $i++) {
                      draw_product_add_sale_row($product);
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="mt-2">
                  <h3>Item List</h3>
                </div>
                <div class="input-group my-3 mr-sm-2">
                  <input class="form-control" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseFilterRight" aria-expanded="false" aria-controls="collapseFilter">
                      Filter
                    </button>
                  </div>
                </div>

                <div class="collapse" id="collapseFilterRight">
                  <div class="row align-items-center justify-content-around">

                    <div class="col-md-6 col-sm-12">
                      <label for="categories">Categories</label>
                      <div id="categories" class="rounded border p-2 search-box-category">
                        <?php for ($i = 1; $i < 6; $i++) { ?>

                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="category<?= $i ?>">
                            <label class="custom-control-label" for="category<?= $i ?>">Category <?= $i ?></label>
                          </div>
                        <?php } ?>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                      <label for="brands">Brands</label>
                      <div id="brands" class="rounded border p-2 search-box-category">
                        <?php for ($i = 1; $i < 6; $i++) { ?>

                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="brand<?= $i ?>">
                            <label class="custom-control-label" for="brand<?= $i ?>">Brand <?= $i ?></label>
                          </div>
                        <?php } ?>
                      </div>
                    </div>

                    <div class="col-3 text-center">
                      <div class="custom-control custom-switch my-3">
                        <input type="checkbox" class="custom-control-input" id="stockSwitch">
                        <label class="custom-control-label" for="stockSwitch">In-Stock</label>
                      </div>
                    </div>

                    <div class="col-9">
                      <div class="range-slider my-3">
                        <label for="price">Price:
                          <span class="rangeValues"></span>
                        </label>
                        <input type="range" class="custom-range price-slider" name="minprice" value="0" min="0" max="200" step="1">
                        <input type="range" class="custom-range price-slider" name="maxprice" value="200" min="0" max="200" step="1">
                      </div>
                    </div>

                  </div>
                </div>

                <table class="table table-striped table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                      draw_product_remove_sale_row($product);
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>

          </form>
        </div>
      </div>


    </main>

  </div>
</div>

<?php
draw_footer();
?>