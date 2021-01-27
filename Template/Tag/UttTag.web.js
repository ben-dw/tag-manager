(function () {
    return function (parameters, TagManager) {
        //var setup = {};
        var isLibLoaded = false;
        this.fire = function () {
            if (!isLibLoaded) {
                isLibLoaded = true;
                var utm268 = {};
                utm268.data = {
                    /* Settings General */
                    advertiser_id: parameters.get('advertiser_id'), // do not change
                    pt_pagetype: parameters.get('pt_pagetype'), // insert pagetype, possible values: 'home', 'product', 'category', 'conversion'
                    pt_checkout: parameters.get('pt_checkout'), // insert orderstep 1-n (optional)
                    /* Conversion */
                    pt_conversion: parameters.get('pt_conversion'), // specify your conversion type, e.g. 'lead' or 'order' (optional)
                    pt_conversion_orderid: parameters.get('pt_conversion_orderid'), // insert your order ID or unique identifer (mandatory)
                    pt_conversion_total: parameters.get('pt_conversion_total'), // insert value of basket (optional)
                    pt_conversion_quantity: parameters.get('pt_conversion_quantity'), // insert number of purchased products (optional)
                    pt_conversion_success: parameters.get('pt_conversion_success'), // if Lasttouch / deduplication (Cookie-Weiche) insert 1, for hardcoded 0; Default 0 
                    /* Settings Categories */
                    pt_category: parameters.get('pt_category'), // insert main category
                    pt_subcategory1: parameters.get('pt_subcategory1'), // insert subcategory 1
                    pt_subcategory2: parameters.get('pt_subcategory2'), // insert subcategory 2
                    pt_subcategory3: parameters.get('pt_subcategory3'), // insert subcategory 3
                    pt_subcategory4: parameters.get('pt_subcategory4'), // insert subcategory 4
                    pt_subcategory5: parameters.get('pt_subcategory5'), // insert subcategory 5
                    pt_subcategory6: parameters.get('pt_subcategory6'), // insert subcategory 6
                    pt_subcategory7: parameters.get('pt_subcategory7'), // insert subcategory 7
                    pt_subcategory8: parameters.get('pt_subcategory8'), // insert subcategory 8
                    pt_subcategory9: parameters.get('pt_subcategory9'), // insert subcategory 9
                    pt_subcategory10: parameters.get('pt_subcategory10'), // insert subcategory 10 
                    /* Settings Product */
                    pt_productname: parameters.get('pt_productname'), // insert product name
                    pt_productid: parameters.get('pt_productid'), // insert product id 
                    /* Settings Marketing_Channels */
                    pt_channel: parameters.get('pt_channel'), // insert channel for visit or conversion
                    pt_channel_keyword: parameters.get('pt_channel_keyword'), // insert channel keyword (e.g. Google Keyword) 
                    /* Settings Custom Variables */
                    pt_customvar1: parameters.get('pt_customvar1'), // insert value for defined customvar1
                    pt_customvar2: parameters.get('pt_customvar2'), // insert value for defined customvar2
                    pt_customvar3: parameters.get('pt_customvar3'), // insert value for defined customvar3
                    pt_customvar4: parameters.get('pt_customvar4'), // insert value for defined customvar4
                    pt_customvar5: parameters.get('pt_customvar5'), // insert value for defined customvar5
                    pt_customvar6: parameters.get('pt_customvar6'), // insert value for defined customvar6
                    pt_customvar7: parameters.get('pt_customvar7'), // insert value for defined customvar7
                    pt_customvar8: parameters.get('pt_customvar8'), // insert value for defined customvar8
                    pt_customvar9: parameters.get('pt_customvar9'), // insert value for defined customvar9
                    pt_customvar10: parameters.get('pt_customvar10'), // insert value for defined customvar10 
                    /* Do not change */
                    pt_loc: decodeURI(document.location.href), // do not change
                    pt_ref: decodeURI(document.referrer), // do not change
                    pt_protocol: (("https:" == document.location.protocol) ? "https://" : "http://"), // do not change
                    pt_cachebuster: new Date().getTime() // do not change
                };
                window.utm268 = utm268;
                (function(w,d,s,f,v) {
                    w[v] = w[v] || [];
                    var e = d.getElementsByTagName(s)[0],
                        j = d.createElement(s);
                    j.async = true;
                    j.src = f;
                    e.parentNode.insertBefore(j, e);
                })(window, document,"script","https://utt.pm/utm/268/"+parameters.get('advertiser_id')+".js","utm268");
            }        
        };
    };
})();
