(function () {
  var scopes = document.querySelectorAll('[data-bulk-scope]');
  scopes.forEach(function (scope) {
    var selectAll = scope.querySelector('[data-select-all]');
    var checkboxes = Array.prototype.slice.call(scope.querySelectorAll('[data-row-checkbox]'));
    var form = scope.querySelector('[data-bulk-delete-form]');
    if (!form) return;

    var countEl = form.querySelector('[data-selected-count]');
    var idsContainer = form.querySelector('[data-selected-ids]');
    var submitBtn = form.querySelector('[data-bulk-delete-button]');

    var sync = function () {
      var selected = checkboxes.filter(function (cb) { return cb.checked; });
      if (countEl) countEl.textContent = String(selected.length);
      if (submitBtn) submitBtn.disabled = selected.length === 0;
      if (idsContainer) {
        idsContainer.innerHTML = '';
        selected.forEach(function (cb) {
          var input = document.createElement('input');
          input.type = 'hidden';
          input.name = 'ids[]';
          input.value = cb.value;
          idsContainer.appendChild(input);
        });
      }
      if (selectAll) {
        selectAll.checked = selected.length > 0 && selected.length === checkboxes.length;
        selectAll.indeterminate = selected.length > 0 && selected.length < checkboxes.length;
      }
    };

    if (selectAll) {
      selectAll.addEventListener('change', function () {
        var checked = selectAll.checked;
        checkboxes.forEach(function (cb) { cb.checked = checked; });
        sync();
      });
    }

    checkboxes.forEach(function (cb) {
      cb.addEventListener('change', sync);
    });

    sync();
  });
})();
