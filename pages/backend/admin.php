<main>
    <div class="upload">
        <div class="container">
            <div class="apk">
                <h1 class="text-center pb-3">UPLOAD YOUR FILE</h1>
                <div class="row">
                    <div class="col-12">
                        <form class="form" action="pages/backend/admin-action.php" method="POST" enctype="multipart/form-data">
                            <div class="div">
                                <label for="" class="py-2">Application Title</label><br>
                                <input name="title" class="rounded py-1 w-100" type="text" placeholder="Name of Application">
                            </div>
                            <div class="div pt-2">
                                <label for="" class="py-2">Information about apps</label><br>
                                <input name="desc" class="rounded py-5 w-100" type="text" placeholder="A Short Description of your application!">
                            </div>
                            <div class="div">
                                <label for="" class="pt-2">Thumb Image here...</label><br>
                                <input class="rounded pb-2 w-100" type="file" placeholder="" name="img" id="">
                            </div>
                            <div class="div">
                                <label for="" class="pt-2">Attacthed your File here...</label><br>
                                <input class="rounded pb-2 w-100" type="file" placeholder="" name="apk" id="">
                            </div>
                            <input type="submit" class="btn btn-success rounded pb-2 w-25" name="upload" value="SUBMIT">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>