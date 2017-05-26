<h3>Insert New Ad here</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Category</label>
                    <div class="col-lg-10">
                        <select name="category">

                            <option>select a category</option>
                            <?php foreach ($cats as $cat): ?>
                            <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                              <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Location</label>
                    <div class="col-lg-10">
                        <input type="text" name="location" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                        <textarea class="form-control"  name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Phone Number</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="submit" class="btn btn-lg btn-primary" name="insertAd"  value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>     

<!-- query CDN-->


