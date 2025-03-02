(function() {
    // This will be executed when the plugin page is loaded
    panel.plugin('vantronye/kirby-client-info', {
      created: function() {
        // Custom initialization code
        console.log('Client Info Plugin initialized');
      },
      methods: {
        // Custom methods for your plugin
        saveClientInfo: function(clientInfo) {
          return this.$api.post('client-info/save', {
            clientInfo: clientInfo
          }).then(function(response) {
            if (response.status === 'success') {
              panel.notify.success(response.message);
            } else {
              panel.notify.error(response.message);
            }
            return response;
          }).catch(function(error) {
            panel.notify.error('An error occurred while saving client info');
            return error;
          });
        }
      }
    });
  })();
  