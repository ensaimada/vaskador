const Ziggy = {
                "url":"http:\/\/localhost",
                "port":null,
                "defaults":{},
                "routes":{
                    "users.store":{"uri":"Users","methods":["GET","HEAD"]},
                    "users.create":{"uri":"Users\/Create","methods":["GET","HEAD"]},
                    "users.edit":{"uri":"Users\/{user}\/Edit","methods":["GET","HEAD"]},
                    "users.destroy":{"uri":"Users\/{user}","methods":["GET","HEAD"]},

                    "collaborations.store":{"uri":"Collaborations","methods":["GET","HEAD"]},
                    "collaborations.create":{"uri":"Collaborations\/Create","methods":["GET","HEAD"]},
                    "collaborations.edit":{"uri":"Collaborations\/{collaboration}\/Edit","methods":["GET","HEAD"]},
                    "collaborations.destroy":{"uri":"Collaborations\/{collaboration}","methods":["GET","HEAD"]},

                    "projects.store":{"uri":"Projects","methods":["GET","HEAD"]},
                    "projects.create":{"uri":"Projects\/Create","methods":["GET","HEAD"]},
                    "projects.edit":{"uri":"Projects\/{project}\/Edit","methods":["GET","HEAD"]},
                    "projects.destroy":{"uri":"Projects\/{project}","methods":["GET","HEAD"]},

                    "reports.store":{"uri":"Reports","methods":["GET","HEAD"]},
                    "reports.create":{"uri":"Reports\/Create","methods":["GET","HEAD"]},
                    "reports.edit":{"uri":"Reports\/{report}\/Edit","methods":["GET","HEAD"]},
                    "reports.destroy":{"uri":"Reports\/{report}","methods":["GET","HEAD"]}
                }};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    for (let name in window.Ziggy.routes) {
        Ziggy.routes[name] = window.Ziggy.routes[name];
    }
}

export { Ziggy };
