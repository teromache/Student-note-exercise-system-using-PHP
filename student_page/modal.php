<div class="modal fade" id="submit_modal<?php echo $fetch['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Submit Exercise</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../php/upload_controller/upload_submission.php" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">

                            <input type="text" name="subject_name" value="<?php echo $fetch['subject_name'] ?>" hidden>

                            <div class="form-group">
                                <strong><label class="col-form-label">Exercise Name:</label></strong>
                                <input type="text" class="form-control" name="exercise_name" id="exercise_name" value="<?php echo $fetch['exercise_name']?>" readOnly> 
                            </div>
                            
                            <div class="form-group">
                                <strong><label class="col-form-label">Select document to upload:</label></strong>
                                <input type="file" class="form-control" name="file">
                            </div>
                            

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Proceed</button>
                        </div>
                        </form>  
                        </div>
</div>
</div>

                    <!-- Resubmit Exercise Modal-->

                    <div class="modal fade" id="resubmit_modal<?php echo $fetch['id']?>">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Resubmit Exercise</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../php/upload_controller/resubmit.php" method="post" enctype="multipart/form-data">

                        <div class="modal-body">
                            
                            <div class="form-group">
                            <input type="text" name="file_id" value="<?php echo $fetch['id']?>" hidden>
                            </div>

                            <div class="form-group">
                                <strong><label class="col-form-label">Select document to upload:</label></strong>
                                <input type="file" class="form-control" name="file">
                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Proceed</button>
                        </div>
                        </form> 

                        
                         
                  