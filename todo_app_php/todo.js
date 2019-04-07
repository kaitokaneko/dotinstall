$(function() {
  'use strict';

  // update
  $('#todos').on('click', '.update_todo', function() {
    // idを取得
    var id = $(this).parents('li').data('id');
    // ajax
    $.post('_ajax.php', {
      id: id,
      mode: 'update',
      token: $('#token').val()
    }, function(res) {
      if (res.state === '1') {
        $('#todo_' + id).find('.todo_title').addClass('done');
      } else {
        $('#todo_' + id).find('.todo_title').removeClass('done');
      }
    })
  });

  // delete
  $('#todos').on('click', '.delete_todo', function() {
    // idを取得
    var id = $(this).parents('li').data('id');
    // ajax
    if (confirm('are you sure?')) {
    $.post('_ajax.php', {
      id: id,
      mode: 'delete',
      token: $('#token').val()
    }, function() {
        $('#todo_' + id).fadeOut(800);
    });
    }
  });

  // create
  $('#new_todo_form').on('submit', '.delete_todo', function() {
    // titleを取得
    var title = $('#new_todo').val();
    // ajax
    $.post('_ajax.php', {
      title: title,
      mode: 'create',
      token: $('#token').val()
    }, function(res) {
        // liを追加
    });
    return faulse;
  });

});