(function () {
    return function (parameters, TagManager) {
        this.fire = function () {
		var etrackerConfig = parameters.get('etrackerConfig', {});
		var trackingType = parameters.get('trackingType');
		if (trackingType === 'pageview') {
			var etrackerID = etrackerConfig.etrackerID;
            		if (etrackerID) {
				var script = document.createElement('script');
				var s = document.getElementsByTagName('script')[0];
				script.type = 'text/javascript';
				script.setAttribute('data-secure-code', etrackerID);
				script.setAttribute('id', '_etLoader');
				script.setAttribute('charset', 'UTF-8');
				if (etrackerConfig.enableDoNotTrack) {
                        		script.setAttribute('data-respect-dnt', 'true');
                    		}
				script.src = '//static.etracker.com/code/e.js';
				s.parentNode.insertBefore(script, s);               
			}
		} else if (trackingType === 'event') {
			_etracker.sendEvent(new et_UserDefinedEvent(parameters.get('etrackerEventObject'), parameters.get('etrackerEventCategory'), parameters.get('etrackerEventAction'), parameters.get('etrackerEventType')));
		}
		};
        };
    }
)();
