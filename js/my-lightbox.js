(function ($) {
    let template = `
    <div class="mybox-cover-viewer">
    <img src="">
</div>
    `

    // Document ready
    $(() => {
        $('body').append(template)
        let viewer = $('.mybox-cover-viewer img').first()
        $('.mybox-cover-viewer').on('click', e => {
            $('.mybox-cover-viewer').fadeOut()
        })
        $('.wp-block-image img').on('click', e => {
            let imgSrc = $(e.target).attr('src')
            if (imgSrc) {
                viewer.attr('src', imgSrc)
                viewer.parent().fadeIn()
            }
        })
    })
})(jQuery)