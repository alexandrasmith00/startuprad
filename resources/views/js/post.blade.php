  <script>

    function post_init() {

        // autosize the input area on typing
        autosize($('textarea'));

        // submit on enter
        $('#post-box textarea').keydown(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                makePost($(this.form).serialize());
            }
        });

        $("#post-button").click(function(e){
            e.preventDefault();
            makePost($(this.form).serialize());
        });
    }

    function makePost(data) {

      if ( $("#post-box").parsley().isValid() ) {

        // Build POST data and make AJAX request
        $.post('/addpost', data).success(postSuccess);
        $("#make-post-textarea").attr("placeholder", "{{ $placeholder }}");


        // Ensure the normal browser event doesn't take place
        return false;
      } else {
        $("#make-post-textarea").attr("placeholder", "This cannot be blank!");
      }
    }

    function postSuccess(data) {

        $('#post-box').find('textarea').val('');
        $('#little-tags').importTags('#RADNOW');

        showPost(data);
    }

    function showPost(data) {

        console.log(data);
        var post = data[0];
        var user = data[1];
        var idea = data[2];
        var tags = data[3];

        var header_html = "";
        if (post['type'] == 'update') {

        } else if (post['type'] == 'question') {
            header_html = '<a href="/project/' + idea['id'] + '">' + idea['name'] + '</a>'
        } else if (post['type'] == 'chat') {
            header_html = '<a href="/project/' + idea['id'] + '">' + user['name'] + '</a> <small class="text-muted"> <i style="color: #17bab8;"class="zmdi zmdi-chevron-right"></i></small> <a href="/project/' + idea['id'] + '">' + idea['name'] + '</a></li>';
        }


        var tag_html = "";
        for (var tag in tags) {
            console.log(tags[tag]);
            tag_html += "<label class='label label-primary label-tag'>#" + tags[tag]['tag_slug'] + "</label>";
        }

        // create post
        var el = createPostEl();
        el.find('#add-post-header').append(header_html);
        el.find('#add-post-content').text(post['content']);
        el.find('#add-post-tags').append(tag_html);
        $('#top-of-the-feed').append(el);
    }

    function createPostEl() {
        var text = $('#new-post').text();
        var el = $(text);
        return el;
    }

    $(post_init);

</script>
