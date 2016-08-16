// Navbar
var Nav = React.createClass({
    render: function() {
        return (
            <nav className="navbar navbar-default">
                <div className="container">
                    <a href={ this.props.linkUrl } className="navbar-brand">
                        { this.props.title }
                    </a>
                </div>
            </nav>
        );
    }
});

// Title
var Title = React.createClass({
    render: function() {
        var TitleStyle = {
            color: "#666"
        };
        return(
            <div className="row">
                <h1 style={TitleStyle}>{ this.props.children }</h1>
            </div>
        );
    }
});

// Button
var Button = React.createClass({

    getInitialState: function() {
        return {
            click: false
        };
    },

    handleClick: function() {
        this.setState({
            click: ! this.state.click
        });
    },

    render: function () {
        var btnClass = this.state.click ? 'btn btn-warning' : 'btn btn-success';
        var btnTitle = this.state.click ? this.props.titleActive : this.props.children;

        return(
            <button onClick={ this.handleClick } className={ btnClass }>
                { btnTitle }
            </button>
        );
    }
});

// Form
var Form = React.createClass({
    getInitialState: function() {
        return {
            name: '',
            email: '',
            subject: 'T',
            message: ''
        }
    },

    handleNameChange: function(e) {
        this.setState({name: e.target.value});
    },

    handleEmailChange: function(e) {
        this.setState({email: e.target.value});
    },

    handleSubjectChange: function(e) {
        this.setState({subject: e.target.value});
    },

    handleMessageChange: function(e) {
        this.setState({message: e.target.value});
    },

    handleSubmit: function(e) {
        e.preventDefault();
        var name = this.state.name.trim(),
            email = this.state.email.trim(),
            subject = this.state.subject.trim(),
            message = this.state.message.trim();

        if (! name || ! email || !subject || ! message) {
            return ;
        }

        this.props.onContactSubmit({
            id: this.props.idNumber,
            name: name,
            email: email,
            subject: subject,
            message: message
        });
    },

    render: function() {
        var InputStyle = {
            fontSize: "1.2em",
            color: "#444"
        };
        return(
            <form onSubmit={this.handleSubmit}>
                <div className="form-group">
                    <label htmlFor="name">Name</label>
                    <input type="text" className="form-control" onChange={this.handleNameChange} id="name" placeholder="Name" style={InputStyle}/>
                </div>
                <div className="form-group">
                    <label htmlFor="email">Email</label>
                    <input type="email" className="form-control" onChange={this.handleEmailChange} id="email" placeholder="Email" style={InputStyle}/>
                </div>
                <div className="form-group">
                    <label htmlFor="subject">Subject</label>
                    <select defaultValue={this.state.subject} onChange={this.handleSubjectChange} id="subject" className="form-control" id="subject">
                        <option value="I">Issue</option>
                        <option value="S">Support</option>
                        <option value="T">Tip</option>
                    </select>
                </div>
                <div className="form-group">
                    <label htmlFor="message">Message</label>
                    <textarea className="form-control" onChange={this.handleMessageChange} id="message" placeholder="Type your message here..." rows="3" style={InputStyle}/>
                </div>
                <Button titleActive="Carregando...">
                    Clique aqui
                </Button>
            </form>
        );
    }
});

var Contact = React.createClass({
    render: function() {
        return(
            <tr>
                <th scope="id">{this.props.idNumber}</th>
                <td>{this.props.name}</td>
                <td>{this.props.email}</td>
                <td>{this.props.subject}</td>
                <td>{this.props.children}</td>
            </tr>
        );
    }
})

var List = React.createClass({
    render: function() {
        var contactNodes = this.props.data.map(function(contact) {
            return(
                <Contact idNumber={contact.id} name={contact.name} email={contact.email} subject={contact.subject}>
                    {contact.message}
                </Contact>
            );
        });
        var TableStyle = {
            marginTop: "40px",
            marginBottom: "40px"
        };

        return(
            <table style={TableStyle} className="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    {contactNodes}
                </tbody>
            </table>
        );
    }
});