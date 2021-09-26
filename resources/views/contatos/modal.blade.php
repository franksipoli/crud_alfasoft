<div class="modal" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Do you want to permanently delete the contact <span class="remove-name"></span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <form class="delete-form" action="" method="GET">
          <input type="hidden" name="remove-id" class="remove-id" value="">
          <button type="submit" class="btn btn-danger">Delete</button>
        </forn>
      </div>
    </div>
  </div>
</div>

<script>
  var deleteModal = document.getElementById('deleteModal')

  deleteModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var userName = button.getAttribute('data-user-name')
    var userId = button.getAttribute('data-user-id')

    var modalText = deleteModal.querySelector('.modal-body .remove-name')
    var modalForm = deleteModal.querySelector('form.delete-form')

    modalText.textContent = userName
    modalForm.action = '<?php echo url("/contato/excluir"); ?>'+ '/' + userId
  })
</script>