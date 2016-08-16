// Navbar
var Nav = React.createClass({
    displayName: "Nav",

    render: function () {
        return React.createElement(
            "nav",
            { className: "navbar navbar-default" },
            React.createElement(
                "div",
                { className: "container" },
                React.createElement(
                    "a",
                    { href: this.props.linkUrl, className: "navbar-brand" },
                    this.props.title
                )
            )
        );
    }
});

// Title
var Title = React.createClass({
    displayName: "Title",

    render: function () {
        var TitleStyle = {
            color: "#666"
        };
        return React.createElement(
            "div",
            { className: "row" },
            React.createElement(
                "h1",
                { style: TitleStyle },
                this.props.children
            )
        );
    }
});

// Button
var Button = React.createClass({
    displayName: "Button",


    getInitialState: function () {
        return {
            click: false
        };
    },

    handleClick: function () {
        this.setState({
            click: !this.state.click
        });
    },

    render: function () {
        var btnClass = this.state.click ? 'btn btn-warning' : 'btn btn-success';
        var btnTitle = this.state.click ? this.props.titleActive : this.props.children;

        return React.createElement(
            "button",
            { onClick: this.handleClick, className: btnClass },
            btnTitle
        );
    }
});

// Form
var Form = React.createClass({
    displayName: "Form",

    getInitialState: function () {
        return {
            name: '',
            email: '',
            subject: 'T',
            message: ''
        };
    },

    handleNameChange: function (e) {
        this.setState({ name: e.target.value });
    },

    handleEmailChange: function (e) {
        this.setState({ email: e.target.value });
    },

    handleSubjectChange: function (e) {
        this.setState({ subject: e.target.value });
    },

    handleMessageChange: function (e) {
        this.setState({ message: e.target.value });
    },

    handleSubmit: function (e) {
        e.preventDefault();
        var name = this.state.name.trim(),
            email = this.state.email.trim(),
            subject = this.state.subject.trim(),
            message = this.state.message.trim();

        if (!name || !email || !subject || !message) {
            return;
        }

        this.props.onContactSubmit({
            id: this.props.idNumber,
            name: name,
            email: email,
            subject: subject,
            message: message
        });
    },

    render: function () {
        var InputStyle = {
            fontSize: "1.2em",
            color: "#444"
        };
        return React.createElement(
            "form",
            { onSubmit: this.handleSubmit },
            React.createElement(
                "div",
                { className: "form-group" },
                React.createElement(
                    "label",
                    { htmlFor: "name" },
                    "Name"
                ),
                React.createElement("input", { type: "text", className: "form-control", onChange: this.handleNameChange, id: "name", placeholder: "Name", style: InputStyle })
            ),
            React.createElement(
                "div",
                { className: "form-group" },
                React.createElement(
                    "label",
                    { htmlFor: "email" },
                    "Email"
                ),
                React.createElement("input", { type: "email", className: "form-control", onChange: this.handleEmailChange, id: "email", placeholder: "Email", style: InputStyle })
            ),
            React.createElement(
                "div",
                { className: "form-group" },
                React.createElement(
                    "label",
                    { htmlFor: "subject" },
                    "Subject"
                ),
                React.createElement(
                    "select",
                    { defaultValue: this.state.subject, onChange: this.handleSubjectChange, id: "subject", className: "form-control", id: "subject" },
                    React.createElement(
                        "option",
                        { value: "I" },
                        "Issue"
                    ),
                    React.createElement(
                        "option",
                        { value: "S" },
                        "Support"
                    ),
                    React.createElement(
                        "option",
                        { value: "T" },
                        "Tip"
                    )
                )
            ),
            React.createElement(
                "div",
                { className: "form-group" },
                React.createElement(
                    "label",
                    { htmlFor: "message" },
                    "Message"
                ),
                React.createElement("textarea", { className: "form-control", onChange: this.handleMessageChange, id: "message", placeholder: "Type your message here...", rows: "3", style: InputStyle })
            ),
            React.createElement(
                Button,
                { titleActive: "Carregando..." },
                "Clique aqui"
            )
        );
    }
});

var Contact = React.createClass({
    displayName: "Contact",

    render: function () {
        return React.createElement(
            "tr",
            null,
            React.createElement(
                "th",
                { scope: "id" },
                this.props.idNumber
            ),
            React.createElement(
                "td",
                null,
                this.props.name
            ),
            React.createElement(
                "td",
                null,
                this.props.email
            ),
            React.createElement(
                "td",
                null,
                this.props.subject
            ),
            React.createElement(
                "td",
                null,
                this.props.children
            )
        );
    }
});

var List = React.createClass({
    displayName: "List",

    render: function () {
        var contactNodes = this.props.data.map(function (contact) {
            return React.createElement(
                Contact,
                { idNumber: contact.id, name: contact.name, email: contact.email, subject: contact.subject },
                contact.message
            );
        });
        var TableStyle = {
            marginTop: "40px",
            marginBottom: "40px"
        };

        return React.createElement(
            "table",
            { style: TableStyle, className: "table table-striped" },
            React.createElement(
                "thead",
                null,
                React.createElement(
                    "tr",
                    null,
                    React.createElement(
                        "th",
                        null,
                        "ID"
                    ),
                    React.createElement(
                        "th",
                        null,
                        "Name"
                    ),
                    React.createElement(
                        "th",
                        null,
                        "Email"
                    ),
                    React.createElement(
                        "th",
                        null,
                        "Subject"
                    ),
                    React.createElement(
                        "th",
                        null,
                        "Message"
                    )
                )
            ),
            React.createElement(
                "tbody",
                null,
                contactNodes
            )
        );
    }
});