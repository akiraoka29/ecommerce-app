<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form register -->
                <form>
                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <input type="email" class="form-control" id="registerEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="registerUsername">Username</label>
                        <input type="text" class="form-control" id="registerUsername" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="registerRetypePassword">Retype Password</label>
                        <input type="password" class="form-control" id="registerRetypePassword"
                            placeholder="Retype password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>