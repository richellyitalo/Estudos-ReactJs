export function moviesList() {
  return {
    type: 'MOVIES_LIST',
    payload: [
      {id: 1, name: 'Robocop'},
      {id: 2, name: 'DeadPool'},
      {id: 3, name: 'Planeta dos Macacos'}
    ]
  }
}

export function dirList() {
  return {
    type: 'DIR_LIST',
    payload: [
      {id: 1, name: 'Tarantino'},
      {id: 2, name: 'Michael Bay'},
      {id: 3, name: 'Scocese'}
    ]
  }
}