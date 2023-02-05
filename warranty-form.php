
        <?php
            @include('layouts/header.php');
        ?>



        <div class="warranty_form">
            <h1>Quick Fix Warranty Form</h1>
            <table>
                <tr>
                    <td><b>Name:</b></td>
                    <td>Maria Anders</td>
                </tr>
                <tr>
                    <td><b>Phone No:</b></td>
                    <td>+88123456789</td>
                </tr>
                <tr>
                    <td><b>Email:</b></td>
                    <td>demo@gmail.com</td>
                </tr>
                <tr>
                    <td><b>Product ID:</b></td>
                    <td>xyzxyzxyzxyzxyzxyzxyz</td>
                </tr>
                <tr>
                    <td><b>Bought from:</b></td>
                    <td>12/02/2033</td>
                </tr>
                <tr>
                    <td><b>Vehicle type:</b></td>
                    <td>Motorcycle</td>
                </tr>
                <tr>
                    <td><b>ODO:</b></td>
                    <td>1200KM</td>
                </tr>
            </table>



            <div class="warranty_form_input">
                <div class="odo_input">
                    <p>Please tell us your current ODO</p>
                    <input type="text">
                </div>
                <div class="warranty_detalis">
                    <p>Please tell us about your problem in details</p>
                    <textarea></textarea>
                </div>
                <div class="warranty_img_container">
                    <div class="warranty_img_input">
                        <p>Please attach images of the damages (not more than 2)</p>
                        <div class="file_img">
                            <div class='w_file file--upload'>
                                <label for='input-file'>
                                    <i class="fa-solid fa-cloud-arrow-up"></i>Upload
                                </label>
                                <input id='input-file' type='file' />
                            </div>
                            <div class="w_up_img">
                                <img src="./images/contemporary-designers-looking-whiteboard-while-their-colleague-making-presentation_274679-20882.avif"
                                    alt="">
                                <img src="./images/contemporary-designers-looking-whiteboard-while-their-colleague-making-presentation_274679-20882.avif"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="warranty_submit_btn">
                        <button>SUBMIT</button>
                        <button>RESET</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
             @include('layouts/footer.php');
        ?>
