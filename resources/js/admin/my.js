$(document).ready(function (){
    let origin = window.location.origin;

    $('.item-group').hover(function (){
        $(this).addClass('hover-item');
    }, function () {
        $(this).removeClass('hover-item')
    });

    $('#show-name').click(function (){
        let item = $(this);
        showHideItem(item, 'group-name')
    });

    $('#total-user').click(function (){
        let item = $(this);
        showHideItem(item, 'total-user')
    });

    function showHideItem(item, nameClass) {
        if (!$(item)[0].checked) {
            $('.' + nameClass).hide();
        } else {
            $('.' + nameClass).show();
        }
    }

    $('.delete-group').click(function (){
        let groupId = $(this).attr('data-id')
        if (confirm('are you sure')) {
            $.ajax({
                url: origin + '/admin/groups/' + groupId + '/delete',
                method: 'GET',
                type: 'json',
                success: function (data) {
                    $('#group-' + groupId).remove();
                },
                error: function () {

                }
            });

        }
    })

    $('#search-group').on('keyup',function () {
        let value = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: origin + '/admin/groups/search',
            method: 'POST',
            data: {
                keyword: value
            },
            type: 'json',
            success: function (data) {
                if (data) {
                    let html = '';
                    html += '<li>';
                    html += data[0].name;
                    html += '</li>';

                    $('#list-group-search').html(html)
                } else {
                    $('#list-group-search').html('')

                }

            }
        })
    })

    $('.show-detail-group').click(function (){
        alert(1)
    })

})
