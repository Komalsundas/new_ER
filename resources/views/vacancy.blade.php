@extends('layouts.app2')

    <div class="div1 text-center">
        <div class="row no-gutters">
            <div class="col-md-12 ">
                <b><p>Vacancy Announcement</p></b>
                <p>Bhutan Telecom Limited is pleased to announce vacancies as listed below for immediate recruitment and appointment.</p>
                <div class="container">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Position</th>
                        <th scope="col">Slots</th>
                        <th scope="col">Minimum Qualification</th>
                        <th scope="col">Remuneration</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                            <th scope="row">1</th>
                            <td>Technician</td>
                            <td>14</td>
                            <td>VTI/TTI Graduate (National Certificate Level-2 in Electrical/Electronics/IT/Computer Hardware and Networking)
                                Minimum 55% in X & XII
                                </td>
                            <td>Grade/ Cadre: C1
                                Pay Scale: 18,650-465-27,950
                                Corporate Allowance: 20%</td>
                                <td>
                             
                                    <button type="submit" class="btn btn-success btn-sm" value="1" name='flag'>
                                        <i class="far fa-edit"></i>
                                        <a href="{{ route('form') }}" style="color: white; text-decoration: none;">Apply</a>
                                    </button>
                                    
                                    </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>ESP</td>
                        <td>5</td>
                        <td>VTI/TTI Graduate (National Certificate Level-2 in Electrical/Electronics/IT/Computer Hardware and Networking)
                            Minimum 55% in X & XII
                            </td>
                        <td>Grade/ Cadre: C1
                            Pay Scale: 18,650-465-27,950
                            Corporate Allowance: 20%</td>
                            <td>
                                <button type="submit" class="btn btn-success btn-sm" value="1" name='flag'>
                                    <i class="far fa-edit"></i>
                                    Apply</button>
                            </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Engineer</td>
                        <td>2</td>
                        <td>VTI/TTI Graduate (National Certificate Level-2 in Electrical/Electronics/IT/Computer Hardware and Networking)
                            Minimum 70% in X & XII
                            </td>
                        <td>Grade/ Cadre: C1
                            Pay Scale: 28,650-465-37,950
                            Corporate Allowance: 20%</td>
                            <td>
                                <button type="submit" class="btn btn-success btn-sm" value="1" name='flag'>
                                    <i class="far fa-edit"></i>
                                    Apply</button>
                            </td>
                  </tr>
                      
        
                    </tbody>
                  </table>
                </div>
                  
            </div> 
        </div>
    </div>

