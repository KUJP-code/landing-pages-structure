$(function() {
    var topBtn = $('.l-floating__sns');
    //�{�^�����\���ɂ���
    topBtn.hide();
    //�X�N���[�����ăy�[�W�g�b�v����100�ɒB������{�^����\��
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
			//�t�F�[�h�C���ŕ\��
            topBtn.fadeIn();
        } else {
			//�t�F�[�h�A�E�g�Ŕ�\��
            topBtn.fadeOut();
        }
    });
    //�t�b�^�[��O�Ń{�^�����~�߂�i������ǉ�����j
    $(window).scroll(function () {
        var height = $(document).height(); //�h�L�������g�̍��� 
        var position = $(window).height() + $(window).scrollTop(); //�y�[�W�g�b�v���猻�ݒn�܂ł̍���
        var footer = $("footer").height(); //�t�b�^�[�̍���
        if ( height - position  < footer ) { 
            topBtn.css({
              bottom : 30
            });
        } else { 
            topBtn.css({
              position : "fixed",
              bottom : 0
            });
        }
    });
});

$(function() {
    var topBtn = $('.to-top');
    //�{�^�����\���ɂ���
    topBtn.hide();
    //�X�N���[�����ăy�[�W�g�b�v����100�ɒB������{�^����\��
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
			//�t�F�[�h�C���ŕ\��
            topBtn.fadeIn();
        } else {
			//�t�F�[�h�A�E�g�Ŕ�\��
            topBtn.fadeOut();
        }
    });
    //�t�b�^�[��O�Ń{�^�����~�߂�i������ǉ�����j
    $(window).scroll(function () {
        var height = $(document).height(); //�h�L�������g�̍��� 
        var position = $(window).height() + $(window).scrollTop(); //�y�[�W�g�b�v���猻�ݒn�܂ł̍���
        var footer = $("footer").height(); //�t�b�^�[�̍���
        if ( height - position  < footer ) { 
            topBtn.css({
              bottom : 30
            });
        } else { 
            topBtn.css({
              position : "fixed",
              bottom : 0
            });
        }
    });
    //�X�N���[�����ăg�b�v�֖߂�
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});