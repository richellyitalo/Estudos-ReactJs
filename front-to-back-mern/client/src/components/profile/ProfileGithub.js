import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { Link } from 'react-router-dom'

class ProfileGithub extends Component {
  state = {
    clientId: '28db5785148a370523ef',
    clientSecret: 'abf7a3c1fcf52b938d0113abcd14cf6e17515e1e',
    count: 5,
    sort: 'created: asc',
    repos: []
  }

  componentDidMount() {
    const { username } = this.props
    const { clientId, clientSecret, count, sort } = this.state

    fetch(
      `https://api.github.com/users/${username}/repos?per_page=${count}&sort=${sort}$client_d=${clientId}&client_secret=${clientSecret}`
    )
      .then(res => res.json())
      .then(data => this.setState({ repos: data }))
      .catch(err => console.log(err))
  }

  render() {
    const { repos } = this.state

    const repoItems = repos.map(repo => (
      <div key={repo.id} className="card card-body mb-2">
        <div className="row">
          <div className="col-md-6">
            <h4>
              <a href={repo.html_url} className="text-info" target="_blank">
                {repo.name}
              </a>
            </h4>
            <p>{repo.description}</p>
          </div>
          <div className="col-md-6">
            <span className="badge badge-info mr-1">
              Favoritados: {repo.stargazers_count}
            </span>
            <span className="badge badge-secondary mr-1">
              Watchers: {repo.watchers_count}
            </span>
            <span className="badge badge-success">
              Forks: {repo.forks_count}
            </span>
          </div>
        </div>
      </div>
    ))

    return (
      <div>
        <hr />
        <h3 className="mb-4">Últimos repositórios do Github</h3>
        {repoItems}
      </div>
    )
  }
}

ProfileGithub.propTypes = {
  username: PropTypes.string.isRequired
}

export default ProfileGithub
