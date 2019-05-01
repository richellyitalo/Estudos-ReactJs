import React from 'react';
import PropTypes from 'prop-types';

import { Container, Repository } from './styles';

const CompareList = ({ repositories, onHandleRemoveRepository }) => (
  <Container>
    {repositories.map((repository, index) => (
      <Repository key={repository.id}>
        <header>
          <img src={repository.owner.avatar_url} alt="" />
          <strong>{repository.name}</strong>
          <small>{repository.owner.login}</small>
        </header>

        <ul>
          <li>
            {repository.stargazers_count} <small>stars</small>
          </li>
          <li>
            {repository.forks_count} <small>forks</small>
          </li>
          <li>
            {repository.open_issues_count} <small>issues</small>
          </li>
          <li>
            {repository.last_commit} <small>last commit</small>
          </li>
        </ul>

        <button type="button" onClick={() => onHandleRemoveRepository(index)}>
          <i className="fa fa-times" />
        </button>
      </Repository>
    ))}
  </Container>
);

CompareList.propTypes = {
  repositories: PropTypes.arrayOf(
    PropTypes.shape({
      id: PropTypes.number,
      name: PropTypes.string,
      owner: PropTypes.shape({
        avatar_url: PropTypes.string,
        login: PropTypes.string,
      }),
      stargazers_count: PropTypes.number,
      forks_count: PropTypes.number,
      open_issues_count: PropTypes.number,
      pushed_at: PropTypes.string,
      lastCommit: PropTypes.string,
    }),
  ).isRequired,
  onHandleRemoveRepository: PropTypes.func.isRequired,
};

export default CompareList;
