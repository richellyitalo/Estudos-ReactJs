import React, { Component } from 'react';
import { connect } from 'react-redux';
import { Link } from 'react-router-dom';
import { addBook, clearNewbook } from '../../actions';
import {name as fakerName, random, commerce} from 'faker/locale/pt_BR'

class AddReview extends Component {

  constructor(props) {
    super(props);

    this.state = {
      formdata: {
        name: fakerName.title(),
        author: fakerName.firstName(),
        review: random.words(15),
        pages: random.number({min: 30, max: 500}),
        rating: random.number({min: 1, max: 5}),
        price: commerce.price()
      }
    }
  }

  handleInput = (event, name) => {
    const newFormdata = {
      ...this.state.formdata
    }

    newFormdata[name] = event.target.value;
    this.setState({
      formdata: newFormdata
    })
  }

  showNewBook = (newbook) => (
    newbook.book ? <div className="conf_link">
      Perfeito!
      <Link to={`/books/${newbook.book.id}`}>
        Clique aqui para ver o post
      </Link>
    </div>
    : null
  )

  submit = (event) => {
    event.preventDefault();

    let book = {
      ...this.state.formdata,
      ownerId: this.props.user.id
    }
    this.props.dispatch(addBook(book));
  }

  render () {
    return (
      <div className="rl_container article">
        <form onSubmit={this.submit}>
          <h2>Adicionar uma Review</h2>

          <div className="form_element">
            <input
              type="text"
              placeholder="Nome"
              onChange={(e) => this.handleInput(e, 'name')}
              value={this.state.formdata.name}
            />
          </div>

          <div className="form_element">
            <input
              type="text"
              placeholder="Autor"
              onChange={(e) => this.handleInput(e, 'author')}
              value={this.state.formdata.author}
            />
          </div>

          <textarea
            placeholder="Crítica"
            onChange={(e) => this.handleInput(e, 'review')}
            value={this.state.formdata.review}
          ></textarea>

          <div className="form_element">
            <input
              type="number"
              placeholder="Páginas"
              onChange={(e) => this.handleInput(e, 'pages')}
              value={this.state.formdata.pages}
            />
          </div>

          <div className="form_element">
            <p style={{textAlign: 'center'}}>Rating</p>
            <select
              onChange={(e) => this.handleInput(e, 'rating')}
              style={{
                padding: '10px'
              }}
              value={this.state.formdata.rating}
            >
              <option val="1">1</option>
              <option val="2">2</option>
              <option val="3">3</option>
              <option val="4">4</option>
              <option val="5">5</option>
            </select>
          </div>

          <div className="form_element">
            <input
              onChange={(e) => this.handleInput(e, 'price')}
              type="text"
              placeholder="Preço"
              value={this.state.formdata.price}
            />
          </div>

          { 
            this.props.books.newbook
            ? this.showNewBook(this.props.books.newbook) 
            : null
          }

          <button type="submit">Enviar</button>
          
        </form>
      </div>
    )
  }

  componentWillUnmount() {
    this.props.dispatch(clearNewbook());
  }
}

function mapStateToProps(state) {
  return {
    books: state.books
  }
}

export default connect(mapStateToProps)(AddReview);
