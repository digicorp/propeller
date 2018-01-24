var pmdRadio = function ($) {
    var NAME = 'pmdSelect2';
    var VERSION = '1.0.0';
    var JQUERY_NO_CONFLICT = $.fn[NAME];

    var ClassName = {
        PMD_SELECT2: 'pmd-select2',
        PMD_TEXTFIELD: 'pmd-textfield',
        PMD_TEXTFIELD_FLOATING_LABEL_ACTIVE: "pmd-textfield-floating-label-active",
        PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED: "pmd-textfield-floating-label-completed",
        PMD_SELECT2_TAGS: ".pmd-select2-tags",
        SELECT2_OPENING: "select2:opening",
        SELECT2_CLOSE: "select2:close",
        SELECT2_SELECTION_CHOICE: "select2-selection__choice"
    }

    var Selector = {
        PARENT_SELECTOR: '',
        PMD_SELECT2: '.pmd-select2',
        PMD_TEXTFIELD: '.pmd-textfield',
        PMD_TEXTFIELD_FLOATING_LABEL_ACTIVE: ".pmd-textfield-floating-label-active",
        PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED: ".pmd-textfield-floating-label-completed",
        PMD_SELECT2_TAGS: ".pmd-select2-tags",
        SELECT2_OPENING: ".select2:opening",
        SELECT2_CLOSE: ".select2:close",
        SELECT2_SELECTION_CHOICE: ".select2-selection__choice",
        SELECT2_SELECTION_RENDERED_LI: ".select2-selection__rendered li"
    };

    var Template = {
        RADIO_LABEL: '<span class="pmd-radio-label">&nbsp;</span>',
        SPAN_LINK: '<span class="ink"></span>'
    }

    var Event = {
        SELECT2_OPENING: 'select2:opening',
        SELECT2_CLOSE: "select2:close",
        CHANGE: "change",
    }

    function onSelect2Opening(e) {
        var $this = $(e.target);
        $this.closest(Selector.PMD_TEXTFIELD).addClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_ACTIVE + " " + ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
    }

    function onSelect2Close(e) {
        var $this = $(e.target);
        $(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_ACTIVE);
        var selected_value = $this.val();
        if (selected_value == 0 || selected_value == '' || selected_value == undefined) {
            $this.closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
        } else {
            $this.closest(Selector.PMD_TEXTFIELD).addClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
        }
    }

    function onSelect2TagClose(e) {
        var $this = $(e.target);
        $(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_ACTIVE);
        var selected_tag = $this.closest(Selector.PMD_TEXTFIELD).find(Selector.SELECT2_SELECTION_CHOICE).hasClass(ClassName.SELECT2_SELECTION_CHOICE);
        if (selected_tag) {
            $this.closest(Selector.PMD_TEXTFIELD).addClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
        } else {
            $this.closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
        }
    }

    function onSelect2TagChange(e) {
        var $this = $(e.target);
        if ($(Selector.SELECT2_SELECTION_RENDERED_LI).hasClass(ClassName.SELECT2_SELECTION_CHOICE)) {
            $this.closest(Selector.PMD_TEXTFIELD).addClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
        } else {
            $this.closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
        }
    }

    var pmdSelect2 = function () {
        _inherits(pmdSelect2, commons);
        function pmdSelect2() {
            var eventSelect = $(Selector.PMD_SELECT2);
            eventSelect.on(Event.SELECT2_OPENING, onSelect2Opening);
            eventSelect.on(Event.SELECT2_CLOSE, onSelect2Close);
			
            eventSelect.each(function (e) {
                var selected_value = $(this).val();
                if (selected_value == 0 || selected_value == '' || selected_value == undefined) {
                    $(this).closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
                } else {
                    $(this).closest(Selector.PMD_TEXTFIELD).addClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
                }
            });
            var eventSelectTag = $(Selector.PMD_SELECT2_TAGS);
            eventSelectTag.on(Event.SELECT2_OPENING, onSelect2Opening);
            eventSelectTag.on(Event.SELECT2_CLOSE, onSelect2TagClose);
            eventSelectTag.on(Event.CHANGE, onSelect2TagChange);
            eventSelectTag.each(function () {
                var selected_tag = $(this).closest(Selector.PMD_TEXTFIELD).find(Selector.SELECT2_SELECTION_CHOICE).hasClass(ClassName.SELECT2_SELECTION_CHOICE);
                if (selected_tag) {
                    $(this).closest(Selector.PMD_TEXTFIELD).addClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
                } else {
                    $(this).closest(Selector.PMD_TEXTFIELD).removeClass(ClassName.PMD_TEXTFIELD_FLOATING_LABEL_COMPLETED);
                }
            });
			
			
        }
        return pmdSelect2;
    } ()

    var plugInFunction = function () {
        if (this.selector !== "") {
            Selector.PARENT_SELECTOR = this.selector;
        }
        new pmdSelect2()
    }

    $.fn[NAME] = plugInFunction;

    return pmdSelect2;
} (jQuery)()
