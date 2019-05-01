import React, { Component } from 'react';
import moment from 'moment';
import localforage from 'localforage';
import api from '../../services/api';
import CompareList from '../../components/CompareList';

import { Container, Form } from './styles';

import logo from '../../assets/image.png';

export default class Main extends Component {
  /* constructor(props) {
    super(props);
    this.getRepository = this.getRepository.bind(this);

    this.state = {
      loading: false,
      repositoryError: false,
      repositoryInput: '',
      repositories: [],
    };
  } */
  state = {
    loading: false,
    repositoryError: false,
    repositoryInput: '',
    repositories: [],
  };

  componentDidMount() {
    localforage.getItem('repositories').then(async repositoryItems => {
      if (repositoryItems !== null) {
        this.setState({ loading: true });

        const repositoriesAddresses = JSON.parse(repositoryItems);
        const repositories = await Promise.all(
          repositoriesAddresses.map(async repositoryAddress =>
            this.getRepository(repositoryAddress),
          ),
        );
        this.setState({ repositories, loading: false });
      }
    });
  }

  componentDidUpdate(prevProps, prevState) {
    const { repositories } = this.state;
    if (prevState.repositories !== repositories) {
      const repositoriesAddresses = repositories.map(repository => repository.full_name);
      localforage.setItem('repositories', JSON.stringify(repositoriesAddresses));
    }
  }

  getRepository = async repositoryAddress => {
    try {
      const { data: repository } = await api.get(`/repos/${repositoryAddress}`);
      repository.last_commit = moment(repository.pushed_at).fromNow();
      return repository;
    } catch (err) {
      console.error(err);
    }
    return null;
  };

  handleAddRepository = async e => {
    e.preventDefault();

    const { repositoryInput } = this.state;

    this.setState({ loading: true });

    try {
      const repository = await this.getRepository(repositoryInput);

      this.setState(state => ({
        repositoryInput: '',
        repositories: [...state.repositories, repository],
        repositoryError: false,
      }));
    } catch (err) {
      this.setState({ repositoryError: true });
    } finally {
      this.setState({ loading: false });
    }
  };

  handleRemoveRepository = index => {
    let { repositories } = this.state;
    repositories = repositories.filter((repository, i) => i !== index);
    this.setState({ repositories });
  };

  render() {
    const { repositories, repositoryInput, repositoryError, loading } = this.state;

    return (
      <Container>
        <img src={logo} alt="Github compare" />
        <Form withError={repositoryError} onSubmit={this.handleAddRepository}>
          <input
            type="text"
            placeholder="usuario/repo"
            onChange={e => this.setState({ repositoryInput: e.target.value })}
            value={repositoryInput}
          />
          <button type="submit">{loading ? <i className="fa fa-spinner fa-pulse" /> : 'OK'}</button>
        </Form>
        <CompareList
          repositories={repositories}
          onHandleRemoveRepository={this.handleRemoveRepository}
        />
      </Container>
    );
  }
}
