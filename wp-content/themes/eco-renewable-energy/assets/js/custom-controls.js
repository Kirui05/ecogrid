(function(api) {

    api.sectionConstructor['eco-renewable-energy-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);