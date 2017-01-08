<?php
$data['name'] = 'Oka Prinarjaya';
$data['email'] = 'okaprinarjaya@gmail.com';
?>

<div class="modal fade" id="ContactAgentModal" tabindex="-1" role="dialog" aria-labelledby="ContactAgentModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                <h4 class="modal-title">Modal title</h4>
            </div>

            <div class="modal-body">
                <p>One fine body contact agent&hellip;</p>
                <p>Name: <?php echo $data['name']; ?></p>
                <p>Email: <?php echo $data['email']; ?></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

        </div>
    </div>
</div>