<style>
.dialog-style{
    border:1px solid #4da6ff ;
    background-color: #d7f1fa;
    top: -5rem;
    text-align: center;
}
.button-close-confirm {
    text-align: center;
}
</style>
<dialog id="student-<?php echo $student['id'] ?>" class="dialog-style" style="">
    <div class="col-md-12">
        <div class="col-md-12 ">
            Bạn chắc chắn xóa sinh viên <span style="color: red;"><?php echo $student['name'] ?></span> ?
            <input type="hidden" name="infoID" value="<?php echo $student['id'] ?>">
        </div>
    </div>
    <div class="col-md-12" style="margin-top: 1rem;">
        <div class=" button-close-confirm" >
            <button type="submit" class="btn-submit" name='delete'>Confirm</button>
            <button type="button" class="btn-close" onclick="closeDialog()" style="margin-left: 1rem;">Cancel</button>
        </div>
    </div>
</dialog>