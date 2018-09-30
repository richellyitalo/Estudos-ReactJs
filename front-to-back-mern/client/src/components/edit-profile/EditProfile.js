import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'
import { withRouter } from 'react-router-dom'

// Helpers
import isEmpty from '../../validation/is-empty'

// Componentes auxiliares
import TextFieldGroup from '../common/TextFieldGroup'
import TextAreaFieldGroup from '../common/TextAreaFieldGroup'
import SelectListGroup from '../common/SelectListGroup'
import InputGroup from '../common/InputGroup'

// Ações
import { createProfile, getCurrentProfile } from '../../actions/profileActions'

class EditProfile extends Component {
  state = {
    displaySocialInputs: false,
    handle: '',
    company: '',
    website: '',
    location: '',
    status: '',
    skills: '',
    githubusername: '',
    bio: '',
    twitter: '',
    facebook: '',
    linkedin: '',
    youtube: '',
    instagram: '',
    errors: {}
  }

  onSubmit = e => {
    e.preventDefault()

    const profileData = {
      handle: this.state.handle,
      company: this.state.company,
      website: this.state.website,
      location: this.state.location,
      status: this.state.status,
      skills: this.state.skills,
      githubusername: this.state.githubusername,
      bio: this.state.bio,
      twitter: this.state.twitter,
      facebook: this.state.facebook,
      linkedin: this.state.linkedin,
      youtube: this.state.youtube,
      instagram: this.state.instagram
    }

    this.props.createProfile(profileData, this.props.history)
  }

  onChange = e => {
    this.setState({ [e.target.name]: e.target.value })
  }

  componentDidMount() {
    this.props.getCurrentProfile();
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.errors) {
      this.setState({ errors: nextProps.errors })
    }

    // Set status principal
    if (nextProps.profile.profile) {
      const profile = nextProps.profile.profile

      // Skills CSV
      const skillsCSV = profile.skills.join(',')

      profile.company = !isEmpty(profile.company) ? profile.company : ''
      profile.website = !isEmpty(profile.website) ? profile.website : ''
      profile.location = !isEmpty(profile.location) ? profile.location : ''
      profile.githubusername = !isEmpty(profile.githubusername) ? profile.githubusername : ''
      profile.bio = !isEmpty(profile.bio) ? profile.bio : ''

      // Social
      profile.social = !isEmpty(profile.social) ? profile.social : {}
      profile.twitter = !isEmpty(profile.social.twitter) ? profile.social.twitter : ''
      profile.facebook = !isEmpty(profile.social.facebook) ? profile.social.facebook : ''
      profile.linkedin = !isEmpty(profile.social.linkedin) ? profile.social.linkedin : ''
      profile.youtube = !isEmpty(profile.social.youtube) ? profile.social.youtube : ''
      profile.instagram = !isEmpty(profile.social.instagram) ? profile.social.instagram : ''

      this.setState({
        displaySocialInputs: !isEmpty(profile.social),
        handle: profile.handle,
        status: profile.status,
        company: profile.company,
        website: profile.website,
        location: profile.location,
        skills: skillsCSV,
        githubusername: profile.githubusername,
        bio: profile.bio,
        twitter: profile.twitter,
        facebook: profile.facebook,
        linkedin: profile.linkedin,
        youtube: profile.youtube,
        instagram: profile.instagram
      })
    }
  }

  render() {
    const { errors, displaySocialInputs } = this.state

    // Select options for status
    const statusOptions = [
      { label: '* Selecione um Status', value: 0 },
      { label: 'Desenvolvedor', value: 'Desenvolvedor' },
      { label: 'Desenvolvedor Junior', value: 'Desenvolvedor Junior' },
      { label: 'Desenvolvedor Senior', value: 'Desenvolvedor Senior' },
      { label: 'Gerente', value: 'Gerente' },
      { label: 'Estudante ou Aprendiz', value: 'Estudante ou Aprendiz' },
      { label: 'Instrutor ou Professor', value: 'Instrutor ou Professor' },
      { label: 'Outros', value: 'Outros' }
    ]

    // Social inputs
    let socialInputs

    if (displaySocialInputs) {
      socialInputs = (
        <div>

          <InputGroup
            name="twitter"
            onChange={this.onChange}
            value={this.state.twitter}
            placeholder="Sua URL do Twitter"
            icon="fab fa-twitter"
            error={errors.twitter}
          />

          <InputGroup
            name="facebook"
            onChange={this.onChange}
            value={this.state.facebook}
            placeholder="Sua URL do Facebook"
            icon="fab fa-facebook"
            error={errors.facebook}
          />

          <InputGroup
            name="linkedin"
            onChange={this.onChange}
            value={this.state.linkedin}
            placeholder="Sua URL do Linkedin"
            icon="fab fa-linkedin"
            error={errors.linkedin}
          />

          <InputGroup
            name="youtube"
            onChange={this.onChange}
            value={this.state.youtube}
            placeholder="Sua URL do Youtube"
            icon="fab fa-youtube"
            error={errors.youtube}
          />

          <InputGroup
            name="instagram"
            onChange={this.onChange}
            value={this.state.instagram}
            placeholder="Sua URL do Instagram"
            icon="fab fa-instagram"
            error={errors.instagram}
          />
        </div>
      )
    }

    return (
      <div className="create-profile">
        <div className="container">
          <div className="row">
            <div className="col-md-8 m-auto">
              <h1 className="display-4 text-center">Crie seu perfil</h1>
              <p className="lead text-center">
                Informe alguns dados para criar seu perfil
              </p>
              <form onSubmit={this.onSubmit}>
                <TextFieldGroup
                  name="handle"
                  onChange={this.onChange}
                  value={this.state.handle}
                  placeholder="* Perfil"
                  info="Uma unica informação para URL. Seu nome completo, companhia, apelido"
                  error={errors.handle}
                />
                <SelectListGroup
                  name="status"
                  onChange={this.onChange}
                  value={this.state.status}
                  placeholder="Selecione um Status"
                  info="Nos diga onde você se encontra na carreira"
                  error={errors.status}
                  options={statusOptions}
                />
                <TextFieldGroup
                  name="company"
                  onChange={this.onChange}
                  value={this.state.company}
                  placeholder="Empresa"
                  info="Informe a empresa onde trabalha"
                  error={errors.company}
                />
                <TextFieldGroup
                  name="website"
                  onChange={this.onChange}
                  value={this.state.website}
                  placeholder="Website"
                  info="Informe sua página ou da empresa"
                  error={errors.website}
                />
                <TextFieldGroup
                  name="location"
                  onChange={this.onChange}
                  value={this.state.location}
                  placeholder="Localização"
                  info="Cidade ou cidade e estado (ex: Mossoró, RN)"
                  error={errors.location}
                />
                <TextFieldGroup
                  name="skills"
                  onChange={this.onChange}
                  value={this.state.skills}
                  placeholder="* Habilidades"
                  info="Use vírgulas para separar os valores (ex: HTML,CSS,JavasScript,PHP)"
                  error={errors.skills}
                />
                <TextFieldGroup
                  name="githubusername"
                  onChange={this.onChange}
                  value={this.state.githubusername}
                  placeholder="Nome de usuário do Github"
                  info="Informe seu nome de usuário para listar seus repositórios"
                  error={errors.githubusername}
                />
                <TextAreaFieldGroup
                  name="bio"
                  onChange={this.onChange}
                  value={this.state.bio}
                  placeholder="Biografia Resumida"
                  info="Conte-nos um pouco sobre você"
                  error={errors.bio}
                />
                <div className="mb-3">
                  <button
                    type="button"
                    onClick={() => {
                      this.setState(prevState => ({
                        displaySocialInputs: !prevState.displaySocialInputs
                      }))
                    }}
                    className="btn btn-light"
                  >
                    Adicionar Link de Redes Sociais
                  </button>
                  <span className="text-muted">Opcional</span>
                </div>
                {socialInputs}
                <input
                  type="submit"
                  value="Atualizar perfil"
                  className="btn btn-info btn-block mt-4"
                />
              </form>
              <small className="d-block pb-3" />
            </div>
          </div>
        </div>
      </div>
    )
  }
}

EditProfile.propTypes = {
  profile: PropTypes.object.isRequired,
  errors: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  profile: state.profile,
  errors: state.errors
})

export default connect(
  mapStateToProps,
  { createProfile, getCurrentProfile }
)(withRouter(EditProfile))
