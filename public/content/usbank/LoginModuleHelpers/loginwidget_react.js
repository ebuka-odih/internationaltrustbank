$(function loginLoading() {
  var button = $('.loginButton');
  button.on('click keydown', function (event) {
    var load = function (event) {
      var version = '<%= System.Configuration.ConfigurationManager.AppSettings["usbAppVersion"]%>';
      var cdnPackagePath = "https://onlinebanking.usbank.com/auth/login/minified/dist/";

      version = version ? version.replace(/\./g, '') : "";
      if (require !== null || typeof require !== 'undefined') {
        require.config({
          urlArgs: '',
          baseUrl: '/content/usbank/',
          waitSeconds: 180,
          paths: {
            "react": "./LoginModuleHelpers/react.production.min",
            "react-dom": "./LoginModuleHelpers/react-dom.production.min",
            "axios": "./LoginModuleHelpers/axios.min",
			      "lodash": "./LoginModuleHelpers/lodash.min",
            "prop-types": "./LoginModuleHelpers/prop-types",
            "authreporting": cdnPackagePath + "plugins/reporting/authreporting",
             "s_codeEvent": cdnPackagePath + "plugins/reporting/s_codeEvent",
            "Omniture_Constants": cdnPackagePath + "plugins/reporting/Omniture_Constants",
            "IOVation_wrapper": cdnPackagePath + "plugins/iovation/IOVation_wrapper",
            "iovation_loader": cdnPackagePath + "plugins/iovation/loader_5.1",
            "adrum": cdnPackagePath + "plugins/appdynamics/adrum",
            "ADRUMCustomConfig": cdnPackagePath + "plugins/appdynamics/ADRUMCustomConfig",
            "LoginModule": cdnPackagePath + "umd/LoginModule"
          },
          'shim': {
            "LoginModule": {
              "deps": [
                "react",
                "react-dom",
                "axios"
              ],
              "exports": "LoginModule"
            },
            "iovation_loader": {
			    "deps":["IOVation_wrapper"],
			    "exports": "iovation_loader"
			}
          }
        });
        window.process = {
          "env": {
            "NODE_ENV": 'production'
          }
        }
        
        /* AppD - Start */
        var appKeyForAppD = "";
		if(window.location.host.startsWith("it")){
			appKeyForAppD = "AD-AAB-AAR-ZUR";
		}else if(window.location.host.startsWith("uat")){
			appKeyForAppD = "AD-AAB-AAU-GGB";
		}else{
			appKeyForAppD = "AD-AAB-AAS-NEX";
		}

        window['adrum-start-time'] = new Date().getTime();
        window['adrum-disable'] = false;
        (function (config) {
    		config.appKey = appKeyForAppD;
            config.beaconUrlHttp = 'http://pdx-col.eum-appdynamics.com';
            config.beaconUrlHttps = 'https://pdx-col.eum-appdynamics.com';
            config.adrumExtUrlHttp = 'http://cdn.appdynamics.com';
            config.adrumExtUrlHttps = 'https://cdn.appdynamics.com';
            config.xd = { enable: false };
            config.spa = {
                spa2: true,
            };
        }(window['adrum-config'] || (window['adrum-config'] = {})));
        /* AppD - End */
        
        require(["react", "react-dom", "prop-types", "axios", "lodash",
          "authreporting", "s_codeEvent", "Omniture_Constants", "IOVation_wrapper","iovation_loader", "adrum", "ADRUMCustomConfig", "LoginModule"
        ],
          function (React, ReactDOM, PropTypes, axios, lodash,
            authreporting, s_codeEvent, Omniture_Constants,IOVation_wrapper, iovation_loader, adrum, ADRUMCustomConfig, LoginModule) {
            
            const header = {
              'Tenant-ID': 'USB',
              'App-ID': 'CDC',
              'Channel-ID': 'web',
              'App-Version': '1',
              'AK': 'zV2JDobreS0n3GBzU7fhgbN6toHArF6v',
              'Correlation-ID': 'aed086ea-9685-4671-814c-3eb86dc5c4fa'
            };
            
            // GET ROUTINGKEY
            function getRoutingKey() {    
              const parseUrl = window.location.origin.split("/")[2];
              return parseUrl && (parseUrl.startsWith("it") || parseUrl.startsWith("uat") || parseUrl.startsWith("emp") || parseUrl.startsWith("perf1") || parseUrl.startsWith("preprod")) ? parseUrl.split("-").length > 1 ? parseUrl.split("-")[0] : parseUrl.split(".")[0] : "Prod"
            }
            
            const configSettings = {
              transmitConfigs: {
                URL: '/Proxy/TS',
                APP_ID: 'web',
                BASE_API_URL: '',
                policyIds: {
                  POLICY: "password_login"
                },
                policyParams: {
                  clientId: "OLB",
                  visitorId: window.visitor ? window.visitor.getMarketingCloudVisitorID() : "",
                  routingKey: getRoutingKey()
                }
              },
              urls: {
                FARM_SIGN_UP_PATH:"",
                BASE_URL: "https://onlinebanking.usbank.com",
                loginAssistance: {
                  FORGOT_ID: 'https://onlinebanking.usbank.com/OLS/LoginAssistant/RetriveId',
                  RESET_PASSWORD: 'https://onlinebanking.usbank.com/OLS/LoginAssistant/ResetPassword',
                  UPDATE_CREDENTIALS_API: "https://auth-credentials-dev.us.bank-dns.com/digital-auth/services/credentials/v1/update",
                  LOGIN_HELP: 'https://onlinebanking.usbank.com/OLS/LoginAssistant/#/GenericLanding',
                  CREATE_USERID_PASSWORD: 'https://onlinebanking.usbank.com/Auth/EnrollmentDesktop/Verification',
                  FORGOT_SHIELD_ANSWER: 'https://onlinebanking.usbank.com/OLS/LoginAssistant/ResetAnswers',
                  STATE_FARM_CUSTOMER: 'https://onlinebanking.usbank.com/OLS/Public/Enrollment/Index?isPartnerOLB=true'
                },
                dashboard: {
				     CUST_HUB_LANDING_PAGE: 'https://onlinebanking.usbank.com/Auth/CustHubLandingPage.aspx'
				 },
				 routerAppURL:"https://onlinebanking.usbank.com/digital/servicing/feature-router/route",
				 routerAppredirectURL: "https://onlinebanking.usbank.com/digital/servicing/customer-dashboard"

              },
              regex: {
                PASSWORD: "^.{8,24}$",
              },
              displayFields: {
                REMEMBER_ME: "show",
                ENROLLMENT_LINK: "show",
                ACCOUNT_TYPE_DROPDOWN: "show",
                COMPANY_ID: "hide",
                LOGIN_HELP: "show",
                FORGOT_ID: "hide",
                RESET_PASSWORD: "hide",
                FARM_SIGN_UP: "hide"
              },
              labels: {
                HEADER_TAG: "h2"
              }
            }
            /* Props for the SiteCat - All the below 3 to be passed. If nothing is passed, then the empty string will be sent to SiteCat */
            const appNameForSiteCat = 'OLB';
            const uxNameForSiteCat = 'desktop';
            const clientNameForSiteCat = 'dotcom';
            window.custHubLandingPage = configSettings.urls.dashboard.CUST_HUB_LANDING_PAGE;
            window.routerAppURL = configSettings.urls.routerAppURL;
            window.routerAppredirectURL = configSettings.urls.routerAppredirectURL;
            
            function isCookiePresent(name) {
				    const cookieData = decodeURIComponent(document.cookie);
				    const cookiearr = cookieData.split(';');
				    const cookieItem = cookiearr.filter(function(value)  { 
				        return JSON.stringify(value).includes(name);
				        
				    })
				    return cookieItem.length > 0;
				    
			}


            //CALLBACK METHOD TO HANDLE TRANSMIT REPSONSE
            function onTransmitAuthorizationSuccess(response) {
              completeSignon(axios, response);
            }
            //CALLBACK METHOD TO HANDLE TRANSMIT REPSONSE
            function onTransmitAuthorizationFailure(response) {
            }
            ReactDOM.render(React.createElement(LoginModule, {
              'configApiHeaders': header,
              'configSettings': configSettings,
              'onAuthorizationSuccess': onTransmitAuthorizationSuccess,
              'onAuthorizationFailure': onTransmitAuthorizationFailure,
              'appNameForSiteCat': appNameForSiteCat,
              'uxNameForSiteCat': uxNameForSiteCat,
              'clientNameForSiteCat': clientNameForSiteCat,
              'isOLB': true,
              'isUMDFormat': true,
              'isAppDEnabled': false,
              'isReportingEnabled': true,
              'isIovationEnabled': true,
	          'configApiURL': "",
	          'isJSLoggerEnabled': false
            }), document.getElementById('LoginWidgetApp'));
            $('.loginWidgetModal').css('visibility', 'visible !important');
            $('.loginWidgetModal').show();
            //--------------------------------------------
            //Function parseJWT decodes JWT from transmit.
            //Extracts the UserID
            //--------------------------------------------
            function parseJwt(token) {
              var base64Url = token.split('.')[1];
              var base64 = decodeURIComponent(atob(base64Url).split('').map(function (c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
              }).join(''));
              return JSON.parse(base64);
            };

            function readSessionStorageItemsForTransmit(jwtBodyJson, token) {
              var storage = window.sessionStorage;
              if (!storage) return null;
              else {
                var userId = jwtBodyJson.sub.toLowerCase();
                storage.setItem('ts:deviceId:' + userId, jwtBodyJson.did);
                storage.setItem('ts:usertkn', token);
                storage.setItem('ts:appid', jwtBodyJson.aud);
                storage.setItem('ts:userid', userId);
                storage.setItem('ts:sessionId:' + userId, jwtBodyJson.sid);
                storage.setItem('InteractionID', jwtBodyJson.InteractionId);
              }
              var length = storage.length;
              var params = [];
              for (var index = 0; index < length; ++index) {
                var key = storage.key(index);
                if (!key) continue;
                if (key.startsWith("ts:") || key.startsWith("currentSession")) {
                  var value = storage.getItem(key);
                  //replace <null> to null due to failure at server validation due to potential risk
                  params.push({ Key: key, Value: value.replace(/"/g, '\\"').replace(/<null>/g, 'null') });
                }
              }
              return params;
            }
            
            function redirectToFeatureRouter(token, tsParams) {
                var JwToken = token;
				var decodedToken = parseJwt(token);
				var applyUrl =	routerAppURL;								
				var Accesstoken = decodedToken.accesstoken;
				var PilotFlags = decodedToken.pilotflags;
				var isDIYPilot = decodedToken.isDIYPilot;
				var interactionId = decodedToken.InteractionId;
				
				tsParams.find(function(obj) {
					if(obj.Key === 'ts:appid')
						appId = obj.Value;
					return;
				})
				tsParams.find(function(obj) {							
					if(obj.Key === 'ts:userid')
						userId = obj.Value;
					return;
				})
				tsParams.find(function(obj) {
					if(obj.Key === 'ts:deviceId'+':'+userId)
						devId = obj.Value;
					return;
				})
				tsParams.find(function(obj) {
					if(obj.Key === 'ts:sessionId'+':'+userId)
						sesId = obj.Value;								
					return;
				})
				
				var storage = window.sessionStorage;
				if(storage && storage.getItem("currentSession")) {
					curSession = storage.getItem("currentSession");
				}

				var laform = document.createElement('form');
				laform.id = "laform";
				laform.method = "POST";
				laform.action = applyUrl;	

				var storageItems = document.createElement("INPUT");
				var redirectUrl = document.createElement("INPUT");
				var deviceParam = "ts:deviceId:"+ userId;
				var sessionParam = "ts:sessionId:"+ userId;
				
				var storageItemsObj= {
					"AccessToken": Accesstoken,
					"pilotflags": PilotFlags,
					"isDIYPilot": isDIYPilot,
					"ts:usertkn": JwToken,
					"ts:userid": userId,
					"currentSession": curSession,
					"ts:appid": appId,
					"InteractionID": interactionId
				};
				
				storageItemsObj[deviceParam] = devId;
                storageItemsObj[sessionParam] = sesId;

				storageItems.name = "storageItems";
				storageItems.value = JSON.stringify(storageItemsObj);
				storageItems.type = 'hidden';	

				redirectUrl.name = "redirectUrl";
				redirectUrl.value = routerAppredirectURL;
				redirectUrl.type = 'hidden';									

				laform.appendChild(storageItems);
				laform.appendChild(redirectUrl);

				document.body.appendChild(laform);
				laform.submit();	
			}
            
            //--------------------------------------------
            //Function to call signOnWithTransmit
            //Params: UserID, JWT, clientname, policy
            //
            //--------------------------------------------
            function completeSignon(axios, response) {
              var url = window.location.origin;
              var jwtBodyJson = parseJwt(response.token);
              var userToken = response.token;
              var tsParams = readSessionStorageItemsForTransmit(jwtBodyJson, response.token);
              var isTempAccess = response.isTempAccess ? true : false;
              var storage = window.sessionStorage;
              var currentSession = storage && storage.getItem("currentSession") ? storage.getItem("currentSession") : null;
              var encodedCurrentSession = currentSession ? currentSession.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;") : null;
              var requestParams = {
                "Policy": "password_login",
                "ClientName": "OLB",
                "DeviceID": response.DeviceID,
                "Token": response.token,
                "UserId": jwtBodyJson.sub,
                "AppId": "web",                
                "TSParams": tsParams,
                "IsTempAccessFlow": isTempAccess,
                "EncodedCurrentSession": encodedCurrentSession,
                "IsGenerateDeviceToken": jwtBodyJson.isGenerateDeviceToken
              };
              var headers = {
                'Content-Type': "application/json"
              }
              var isDIYPilot = jwtBodyJson.isDIYPilot;
              var bid = jwtBodyJson.bid;
              if (isDIYPilot && !isTempAccess && !bid) {
                  if (jwtBodyJson.isGenerateDeviceToken) {
                        axios.post(url + "/Auth/Signon/SignonWithTransmit", JSON.stringify(requestParams), { headers: headers })
                            .then(function (response) {
    						    redirectToFeatureRouter(userToken, tsParams);
    						    return;
                            })
                            .catch(function (error) {
                                console.log('Something went wrong during redirect to DIY dashboard for a pilot User');
                            });
                    } else { 
    				    redirectToFeatureRouter(userToken, tsParams);
    				    return;
    				}
              } else {
                  axios.post(url + "/Auth/Signon/SignonWithTransmit", JSON.stringify(requestParams), { headers: headers })
                    .then(function (response) {
                      if (response && response.data && response.data.RedirectUrl) {
    
                       var accessToken = jwtBodyJson.accesstoken;                             
                        var redirectUrl = response.data.RedirectUrl;
                        redirectUrl += (redirectUrl.indexOf("?") < 0) ? '?tsParams=true' : '&tsParams=true';
                        window.location = redirectUrl;
                      }
                    })
                    .catch(function (error) {
                    });
              }
            };
          }
        );
      }
    };
    switch (event.type) {
      case 'click': load(event); break;
      case 'keydown':
        switch (event.key || event.which || event.code || event.keyCode) {
          case 'Enter': case 13: event.preventDefault(); load(event); break;    
          case 'Spacebar': case 'Space': case ' ': case 32: event.preventDefault(); load(event); break;
          default: break;
        }; break;
      default: break;
    }
  });
});
