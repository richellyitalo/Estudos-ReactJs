// Page
var Page = React.createClass({
    displayName: "Page",

    getInitialState: function () {
        return {
            data: [{ id: 1, name: "Carlos", subject: "I", email: "ccook0@canalblog.com", message: "eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam" }, { id: 2, name: "Gregory", subject: "S", email: "gmoore1@loc.gov", message: "purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes" }, { id: 3, name: "Sean", subject: "I", email: "sporter2@clickbank.net", message: "habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi" }, { id: 4, name: "Arthur", subject: "S", email: "abrooks3@cbslocal.com", message: "id sapien in sapien iaculis congue vivamus metus arcu adipiscing" }, { id: 5, name: "Earl", subject: "S", email: "emontgomery4@phpbb.com", message: "leo odio condimentum id luctus nec molestie sed justo pellentesque viverra" }, { id: 6, name: "Lillian", subject: "T", email: "lgarza5@loc.gov", message: "tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat" }, { id: 7, name: "Kelly", subject: "I", email: "kwatkins6@blinklist.com", message: "diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum" }, { id: 8, name: "Emily", subject: "S", email: "erodriguez7@seesaa.net", message: "suscipit nulla elit ac nulla sed vel enim sit amet nunc viverra dapibus nulla" }, { id: 9, name: "Anne", subject: "T", email: "awilliamson8@wisc.edu", message: "leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum" }, { id: 10, name: "Todd", subject: "T", email: "tbell9@imageshack.us", message: "purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum" }, { id: 11, name: "Ann", subject: "T", email: "arossa@huffingtonpost.com", message: "feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea" }, { id: 12, name: "Larry", subject: "S", email: "lwilliamsb@apple.com", message: "quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a" }, { id: 13, name: "Tina", subject: "T", email: "tellisc@bloglovin.com", message: "sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est" }, { id: 14, name: "Charles", subject: "I", email: "cfordd@tinypic.com", message: "ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl" }, { id: 15, name: "Johnny", subject: "S", email: "jbennette@skyrock.com", message: "consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus" }, { id: 16, name: "Maria", subject: "T", email: "mjohnsonf@cbslocal.com", message: "rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id" }, { id: 17, name: "Rebecca", subject: "I", email: "rgibsong@sciencedirect.com", message: "tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non" }, { id: 18, name: "Andrea", subject: "S", email: "ameyerh@usa.gov", message: "faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam varius" }, { id: 19, name: "Benjamin", subject: "S", email: "bjohnsoni@yale.edu", message: "porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo" }, { id: 20, name: "Jesse", subject: "T", email: "jgardnerj@comsenz.com", message: "id sapien in sapien iaculis congue vivamus metus arcu adipiscing" }]
        };
    },

    handleContactSubmit: function (contact) {
        console.log(contact);

        var newContacts = this.state.data.concat([contact]);
        this.setState({ data: newContacts });
    },

    render: function () {
        return React.createElement(
            "myElement",
            null,
            React.createElement(Nav, { title: "Richelly Italo", linkUrl: "http://richellyitalo.com" }),
            React.createElement(
                "div",
                { className: "container" },
                React.createElement(
                    Title,
                    null,
                    "A vida é um holocausto"
                ),
                React.createElement(
                    "div",
                    { className: "row" },
                    React.createElement(Form, { onContactSubmit: this.handleContactSubmit, idNumber: this.state.data.length + 1 })
                ),
                React.createElement(
                    "div",
                    { className: "row" },
                    React.createElement(List, { data: this.state.data })
                )
            )
        );
    }
});

// ReactDOM.render(
//     <Nav title="Richelly Italo" linkUrl="http://richellyitalo.com" />,
//     document.getElementById('nav')
// );

// ReactDOM.render(
//     <Title title="A vida é um holocausto" />,
//     document.getElementById('title')
// );

// ReactDOM.render(
//     <Button title="Clique aqui" titleActive="Carregando..." />,
//     document.getElementById('button')
// );

ReactDOM.render(React.createElement(Page, null), document.getElementById('page'));