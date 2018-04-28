import React, { Component } from 'react'

function BoilingVerdict(props) {
  if (props.celsius >= 100) {
    return <p>A água irá ferver</p>;
  }
  return <p>A água NÃO irá ferver</p>;
}

function toCelsius(farenheint) {
  return (farenheint - 32) * 5 / 9
}

function toFarenheint(celsius) {
  return (celsius * 9 / 5) + 32
}

function tryConvert(temperatura, conversor) {
  const input = parseFloat(temperatura)
  if (Number.isNaN(input)) {
    return ''
  }
  const output = conversor(input)
  const arredondado = Math.round(output * 1000) / 1000
  return arredondado.toString()
}

const scaleNames = {
  c: 'Celsius',
  f: 'Farenheint'
}

class EntradaDeTemperatura extends Component {
  constructor(props) {
    super(props)
    // this.state = {temperatura: ''}
    this.handleChange = this.handleChange.bind(this)
  }

  handleChange(event) {
    // this.setState({
    //   temperatura: event.target.value
    // })
    this.props.onTemperatureChange(event.target.value)
  }

  render() {
    // const temperatura = this.state.temperatura
    const temperatura = this.props.temperatura
    const scale = this.props.scale
    return (
      <fieldset>
        <legend>Informe a temperatura em <strong>{scaleNames[scale]}</strong></legend>
        <input
          value={temperatura}
          onChange={this.handleChange} />
      </fieldset>
    )
  }
}

class Calculator extends Component {
  
  constructor(props) {
    super(props)

    this.state = {temperatura: '', scale: 'c'}

    this.handleCelsiusChange = this.handleCelsiusChange.bind(this)
    this.handleFahrenheitChange = this.handleFahrenheitChange.bind(this)
  }

  handleCelsiusChange(temperatura) {
    this.setState({
      scale: 'c',
      temperatura: temperatura
    })
  }

  handleFahrenheitChange(temperatura) {
    this.setState({
      scale: 'f',
      temperatura: temperatura
    })
  }

  render() {
    const scale = this.state.scale
    const temperatura = this.state.temperatura
    const celsius = scale === 'f' 
      ? tryConvert(temperatura, toCelsius) 
      : temperatura
    const farenheint = scale === 'c'
      ? tryConvert(temperatura, toFarenheint)
      : temperatura

    return(
      <div>
        <EntradaDeTemperatura
          scale="c"
          temperatura={celsius}
          onTemperatureChange={this.handleCelsiusChange} />
          <EntradaDeTemperatura
            scale="c"
            temperatura={farenheint}
            onTemperatureChange={this.handleFahrenheitChange} />
      </div>
    )
  }

}

export default Calculator